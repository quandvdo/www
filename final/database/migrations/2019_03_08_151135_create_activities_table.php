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
            $table->bigIncrements('id');
            $table->string('title');
            $table->unsignedBigInteger('location_id')->default(1);
            $table->unsignedBigInteger('category_id')->default(1);
            $table->unsignedBigInteger('user_id');
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
