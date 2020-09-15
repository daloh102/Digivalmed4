<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRayStationtwoIosTable extends Migration
{
    public function up()
    {
        Schema::create('ray_stationtwo_ios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bytes');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
