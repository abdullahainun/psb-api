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
            $table->integer('id_user')->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->integer('anak_ke');
            $table->integer('jml_saudara');
            $table->smallinteger('id_jurusan');
            $table->tinyInteger('tinggal_pondok');
            $table->string('bapak_nama');
            $table->string('bapak_alamat');
            $table->string('bapak_no_telp');
            $table->string('bapak_pekerjaan');
            $table->string('bapak_pendidikan');
            $table->string('ibu_nama');
            $table->string('ibu_alamat');
            $table->string('ibu_no_telp');
            $table->string('ibu_pekerjaan');
            $table->string('ibu_pendidikan');
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
