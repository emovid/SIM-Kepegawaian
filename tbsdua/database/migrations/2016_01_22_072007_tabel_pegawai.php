<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nip');
            $table->integer('no_karpeg');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tmt_cpns');
            $table->date('tmt_pns');
            $table->date('tmt_pangkat_terakhir');
            $table->string('golongan');
            $table->string('jabatan');
            $table->string('unit_kerja');
            $table->string('instansi');
            $table->string('pendidikan_terakhir');
            $table->integer('pendidikan_tahun_lulus');
            $table->string('pendidikan_univ');
            $table->string('pendidikan_tempat');
            $table->string('pendidikan_jurusan');
            $table->string('status');
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
        Schema::drop('employees');
    }
}
