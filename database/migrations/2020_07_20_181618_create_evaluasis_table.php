<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Foreign Key alternatif dari Table alternatifs
            $table->unsignedBigInteger('alternatif');
            $table->foreign('alternatif', 'alternatif')->references('id')->on('alternatifs')->onDelete('restrict')->onUpdate('restrict');
            //Foreign Key kriteria dari Table kriterias
            $table->unsignedBigInteger('kriteria');
            $table->foreign('kriteria', 'kriteria1')->references('id')->on('kriterias')->onDelete('restrict')->onUpdate('restrict');
            $table->float('nilai', 8, 2);
            $table->unsignedBigInteger('submit_by');
            $table->foreign('submit_by', 'submit_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('evaluasis');
    }
}
