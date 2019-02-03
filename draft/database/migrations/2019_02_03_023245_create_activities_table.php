<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('location_id')->default(1);
            $table->unsignedInteger('category_id')->default(1);
            $table->unsignedInteger('user_id');
            $table->text('description')->nullable();
            $table->text('highlight')->nullable();
            $table->text('itinerary')->nullable();
            $table->integer('age')->default(16);
            $table->integer('duration')->default(1);
            $table->string('month')->default('Any Months');
            $table->string('departure_time')->default('Daily at 9:00am');
            $table->string('slug');
            $table->boolean('isActive')->default(true);
            $table->boolean('isInquiry')->default(true);
            $table->boolean('isDiscount')->default(false);
            $table->boolean('isPackage')->default(true);
            $table->boolean('isFeature')->default(false);
            $table->timestamps();
            $table->index(['slug', 'isFeature', 'isPackage']);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('location_id')->references('id')->on('cities');
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
        Schema::dropIfExists('activities');
        Schema::enableForeignKeyConstraints();
    }
}
