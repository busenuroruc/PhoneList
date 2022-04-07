<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employer_id')->nullable();
            $table->unsignedBigInteger('job_taker_id')->nullable();
            $table->unsignedBigInteger('defination_id')->nullable();
            $table->string('description');
            $table->boolean('completed');
            $table->timestamps();
            $table->foreign('employer_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('job_taker_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('defination_id')->on('definations')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
