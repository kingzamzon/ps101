<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaychecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paychecks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('agent_id');
            $table->timestamp('paycheck_date');
            $table->string('deposit_no')->nullable();
            $table->string('total_card_process')->nullable();
            $table->string('amount_commission')->nullable();
            $table->string('total_employee')->nullable();
            $table->string('total_benefit_plan')->nullable();
            $table->string('commision_benefit_card')->nullable();
            $table->string('deposit_no')->nullable();
            $table->timestamp('deposit_date');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paychecks');
    }
}
