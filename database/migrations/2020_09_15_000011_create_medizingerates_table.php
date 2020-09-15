<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedizingeratesTable extends Migration
{
    public function up()
    {
        Schema::create('medizingerates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ip');
            $table->string('dns_suffix');
            $table->string('mac');
            $table->string('ansprechpartner');
            $table->string('notizen')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
