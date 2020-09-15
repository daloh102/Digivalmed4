<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDicomNamerCbcTsTable extends Migration
{
    public function up()
    {
        Schema::create('dicom_namer_cbc_ts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('patientenid');
            $table->string('kv');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
