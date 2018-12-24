<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->date('start_date')->default(DB::raw('CURRENT_TIMESTAMP')->format('Y-m-d'));
            $table->date('end_date')->default('2099-12-31');
            $table->decimal('price', 3, 2)->default(0);
            $table->integer('quota');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        Schema::create('promotion_stats', function (Blueprint $table) {
            $table->unsignedInteger('promotion_id');
            $table->integer('time_used');
            $table->timestamp();
        });

        Schema::create('promotion_qualifies', function (Blueprint $table) {
            $table->unsignedInteger('promotion_id');
            $table->unsignedInteger('activities_id');
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
        Schema::dropIfExists('promotion_stats');
        Schema::dropIfExists('promotion_qualifies');
    }
}
