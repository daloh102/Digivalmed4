<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkflowPathsTable extends Migration
{
    public function up()
    {
        Schema::create('workflow_paths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nummer');
            $table->string('name');
            $table->string('eaid');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
