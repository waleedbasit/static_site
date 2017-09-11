<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutpagesTable extends Migration
{
    
    public function up()
    {
        Schema::create('aboutpages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mainpage_id');
            $table->string('heading');
            $table->string('subtext');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('aboutpages');
    }
}
