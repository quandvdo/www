<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('payment_type')->default(1)->comment('Default cash');
            $table->timestamp('payment_date')->useCurrent();
            $table->string('reference')->nullable();
            $table->text('comment')->nullable();
            $table->decimal('value', 13, 2);
            $table->boolean('isActive');
            $table->unsignedInteger('agent_id')->default('1')->comment('Pay to account - Default = CompassTravel');
            $table->timestamps();
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

        Schema::dropIfExists('basket_payments');
        Schema::enableForeignKeyConstraints();
    }
}
