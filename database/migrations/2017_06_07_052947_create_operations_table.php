<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('operations_id');
          $table->integer('operations_caddy_id')->unsigned();
          $table->string('nama_caddy');
          $table->string('nama_golfer');
          $table->string('no_bagtag');
          $table->string('clubs');
          $table->string('tanggal');
          $table->string('jam');
          $table->string('remarks');
          $table->timestamps();

          $table->foreign('operations_caddy_id')->references('caddy_id')->on('data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
}
