<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sequence');
            $table->unsignedInteger('basket_id');
            $table->unsignedInteger('activity_id');
            $table->string('name');
            $table->string('email');
            $table->string('type')->comment('tour or package');
            $table->date('activity_date')->useCurrent();
            $table->decimal('price', 13, 2);
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('basket_id')->references('id')->on('baskets');
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
        Schema::dropIfExists('basket_items');
        Schema::enableForeignKeyConstraints();
    }
}
