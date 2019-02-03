<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('activity_id')->nullable();
            $table->string('where');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->text('msg');
            $table->tinyInteger('status')->default(1)->comment('1 : New, 2: In-progress, 3: Resolved');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('inquiries');
        Schema::enableForeignKeyConstraints();
    }
}
