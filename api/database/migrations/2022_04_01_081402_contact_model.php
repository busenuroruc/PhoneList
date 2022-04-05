<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactModel extends Migration
{
    public function up()
    {
        Schema::create('ContactModel', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone");
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('ContactModel');
    }
}
