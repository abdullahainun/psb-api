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
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->integer('anak_ke');
            $table->integer('jml_saudara');
            $table->smallinteger('id_kelas');
            $table->smallinteger('id_jurusan');
            $table->tinyInteger('tinggal_pondok');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('wali_alamat');
            $table->string('wali_no_telp');
            $table->smallinteger('id_pekerjaan');
            $table->string('pendidikan_ayah');
            $table->string('pendidikan_ibu');
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
