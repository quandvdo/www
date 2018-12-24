<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 13, 2);
            $table->unsignedInteger('type')->default(1)->comment('1 shop item, 2 gift item');
            $table->string('img');
            $table->boolean('isActive')->default(true);
            $table->timestamps();
        });

        Schema::create('addon_qualifies', function (Blueprint $table) {
            $table->unsignedInteger('activity_id');
            $table->unsignedInteger('addon_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addons');
        Schema::dropIfExists('addon_qualifies');
    }
}
