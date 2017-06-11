<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('performances_id');
            $table->integer('performances_caddy_id')->unsigned();
            $table->string('joined')->nullable();
            $table->string('training')->nullable();
            $table->string('tournament')->nullable();
            $table->timestamps();

            $table->foreign('performances_caddy_id')->references('caddy_id')->on('data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performances');
    }
}
