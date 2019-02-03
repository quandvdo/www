<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activity_id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price', 13, 2)->default(0);
            $table->string('tagline')->nullable();
            $table->integer('capacity')->default(1);
            $table->string('recursive')->nullable();
            $table->date('start_date')->useCurrent();
            $table->date('end_date')->default('2099-12-31');
            $table->integer('start_time')->default(800);
            $table->integer('duration_day')->default(0);
            $table->integer('duration_hour')->default(0);
            $table->integer('duration_minute')->default(0);
            $table->boolean('isActive')->default(true);
            $table->integer('cutoffTime')->default(600);
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
        Schema::dropIfExists('activity_prices');
        Schema::enableForeignKeyConstraints();
    }
}
