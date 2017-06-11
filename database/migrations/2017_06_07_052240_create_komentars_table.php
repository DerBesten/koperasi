<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('komentar_id');
            $table->integer('komentar_caddy_id')->unsigned();
            $table->string('komentar_nama')->nullable();
            $table->text('komentar_isi');
            $table->string('komentar_status');
            $table->datetime('komentar_tglinput');
            $table->timestamps();

            $table->foreign('komentar_caddy_id')->references('caddy_id')->on('data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentars');
    }
}
