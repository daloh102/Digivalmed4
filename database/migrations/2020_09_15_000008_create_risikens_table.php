<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisikensTable extends Migration
{
    public function up()
    {
        Schema::create('risikens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eaid');
            $table->string('risiko');
            $table->string('url');
            $table->string('source');
            $table->string('auswirkung_brutto');
            $table->string('auswirkung_netto');
            $table->string('eintrittswahrscheinlichkeit_brutto');
            $table->string('eintrittswahrscheinlichkeit_netto');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
