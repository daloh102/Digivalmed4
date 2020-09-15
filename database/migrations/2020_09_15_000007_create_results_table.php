<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('eaid');
            $table->string('ebene');
            $table->string('risiko');
            $table->string('risikoid');
            $table->string('url');
            $table->string('source');
            $table->string('auswirkung_netto');
            $table->string('auswirkung_brutto');
            $table->string('eintrittswahrscheinlichkeit_brutto');
            $table->string('eintrittswahrscheinlichkeit_netto')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
