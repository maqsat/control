<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('status_id');
            $table->integer('sum');
            $table->timestamp('start')->useCurrent();
            $table->timestamp('end')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_status');
    }
}
