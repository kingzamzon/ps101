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
            $table->bigInteger('user_id')->foreign();
            $table->bigInteger('agent_id')->foreign();
            $table->string('social_no')->nullable();
            $table->string('mailing_address')->nullable();
            $table->timestamp('paycheck_date');
            $table->string('deposit_no')->nullable();
            $table->timestamp('deposit_date');
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
        Schema::dropIfExists('paychecks');
    }
}
