<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityAddOnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_addons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activity_id');
            $table->string('name');
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('price', 13, 2);
            $table->unsignedInteger('type')->default(1)->comment('1 shop item, 2 gift item');
            $table->string('img');
            $table->boolean('isActive')->default(true);
            $table->timestamps();
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('activity_addons');
        Schema::enableForeignKeyConstraints();
    }
}
