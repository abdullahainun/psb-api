<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_users')->unique();
            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('jml_saudara')->nullable();
            $table->smallinteger('id_jurusan')->nullable();
            $table->tinyInteger('tinggal_pondok')->nullable();
            $table->string('bapak_nama')->nullable();
            $table->string('bapak_alamat')->nullable();
            $table->string('bapak_no_telp')->nullable();
            $table->string('bapak_pekerjaan')->nullable();
            $table->string('bapak_pendidikan')->nullable();
            $table->string('ibu_nama')->nullable();
            $table->string('ibu_alamat')->nullable();
            $table->string('ibu_no_telp')->nullable();
            $table->string('ibu_pekerjaan')->nullable();
            $table->string('ibu_pendidikan')->nullable();
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
        Schema::dropIfExists('pendaftar');
    }
}
