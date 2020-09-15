<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDicomNamerIosTable extends Migration
{
    public function up()
    {
        Schema::create('dicom_namer_ios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bytes');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
