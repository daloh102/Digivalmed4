<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkflowsTable extends Migration
{
    public function up()
    {
        Schema::create('workflows', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ebene');
            $table->string('eaid');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
