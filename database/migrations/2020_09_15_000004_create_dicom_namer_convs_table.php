<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDicomNamerConvsTable extends Migration
{
    public function up()
    {
        Schema::create('dicom_namer_convs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source_ip');
            $table->string('dest_ip');
            $table->string('protokoll');
            $table->string('medizingeraet');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
