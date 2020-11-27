<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriterias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 20);
            $table->set('minmaks', ['min', 'maks']);
            //Foreign Key pref dari Table preferensis
            $table->unsignedBigInteger('pref');
            $table->foreign('pref', 'pref')->references('id')->on('preferensis')->onDelete('restrict')->onUpdate('restrict');
            $table->float('q', 8, 2);
            $table->float('p', 8, 2);
            $table->float('bobot', 8, 2);
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
        Schema::dropIfExists('kriterias');
    }
}
