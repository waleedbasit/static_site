<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainpagesTable extends Migration
{
    
    public function up()
    {
        Schema::create('mainpages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading');
            $table->string('logo');
            $table->timestamps();
        });
    }

    

    public function down()
    {
        Schema::dropIfExists('mainpages');
    }
}
