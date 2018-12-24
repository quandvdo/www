<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('payment_type')->default(1)->comment('Default cash');
            $table->string('reference')->nullable();
            $table->text('comment')->nullable();
            $table->decimal('value', 13, 2);
            $table->boolean('isActive');
            $table->unsignedInteger('agent_id')->default('1')->comment('Pay to account - Default = CompassTravel');
            $table->timestamps();
        });
        Schema::create('payment_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('charge', 2, 2)->default(0.00);
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
        Schema::dropIfExists('payments');
        Schema::dropIfExists('payment_types');
    }
}
