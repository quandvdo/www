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
            $table->string('location');
            $table->unsignedInteger('category_id')->default(1);
            $table->text('description')->nullable();
            $table->text('highlight')->nullable();
            $table->text('itinerary')->nullable();
            $table->string('slug');
            $table->boolean('isActive')->default(true);
            $table->boolean('isInquiry')->default(true);
            $table->boolean('isDiscount')->default(false);
            $table->boolean('isPackage')->default(true);
            $table->boolean('isFeature')->default(false);
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
        Schema::dropIfExists('activities');
    }
}
