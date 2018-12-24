<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('status')->default(1)->comment('0 cancle, 1 active, 2 verification required, 3 paid, 4 finished/completed');
            $table->decimal('basket_total', 13, 2);
            $table->datetime('payment_date')->nullable();
            $table->datetime('invoice_date')->nullable();
            $table->unsignedInteger('user_id')->comment('Buyer ID -> get email');
            $table->unsignedInteger('agent_id')->comment('Agent ID who book this tour');
            $table->timestamps();
        });

        Schema::create('basket_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('basket_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activity_id');
            $table->unsignedInteger('type');
            $table->datetime('activity_date');
            $table->decimal('price', 13, 2);
            $table->integer('quantity');
            $table->string('description');
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
        Schema::dropIfExists('baskets');
        Schema::dropIfExists('basket_types');
    }
}
