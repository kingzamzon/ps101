<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('category');
            $table->string('tags');
            $table->bigInteger('user_id')->foreign()->nullable(); //assign_to
            $table->bigInteger('deal_id')->foreign()->nullable();
            $table->bigInteger('task_id')->foreign()->nullable();
            $table->bigInteger('company_id')->foreign()->nullable();
            $table->string('participants')->foreign()->default([]);
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('events');
    }
}
