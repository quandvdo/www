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
            $table->integer('quantity')->default(1);
            $table->unsignedInteger('user_id')->comment('Buyer ID -> get email');
            $table->unsignedInteger('agent_id')->default(1)->comment('Agent ID who book this tour');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('agent_id')->references('id')->on('agents');
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
        Schema::dropIfExists('baskets');
        Schema::enableForeignKeyConstraints();
    }
}
