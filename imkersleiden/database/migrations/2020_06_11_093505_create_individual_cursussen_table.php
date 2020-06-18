<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualCursussenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_cursussen', function (Blueprint $table) {
            $table->unsignedBigInteger('individual_id')->index(); 
            $table->foreign('individual_id')->references('id')->on('individuals');
            $table->unsignedBigInteger('cursus_id')->index(); 
            $table->foreign('cursus_id')->references('id')->on('cursus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_cursussen');
    }
}
