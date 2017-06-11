<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('caddy_id');
            $table->string('nama');
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('perusahaan')->nullable();
            $table->string('bio')->nullable();
            $table->string('tlp')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('status')->nullable();
            $table->string('performance')->nullable();
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
        Schema::dropIfExists('data');
    }
}
