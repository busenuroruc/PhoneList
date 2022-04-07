<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('definations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('defination_id')->nullable();
            $table->string('type');
            $table->string('name');
            $table->timestamps();
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
        Schema::dropIfExists('definations');
    }
}
