<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlasifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klasifikasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Foreign Key kriteria dari Table kriterias
            $table->unsignedBigInteger('kriteria');
            $table->foreign('kriteria', 'kriteria')->references('id')->on('kriterias')->onDelete('restrict')->onUpdate('restrict');
            $table->float('nilai', 8, 2);
            $table->float('klasifikasi', 8, 2);
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
        Schema::dropIfExists('klasifikasis');
    }
}
