<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencoblos', function (Blueprint $table) {
            $table->id();
            $table->boolean('hadir')->default(false);
            $table->biginteger('kk');
            $table->biginteger('nik');
            $table->string('nama');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('umur');
            $table->string('sts_kawin');
            $table->string('jns_kelamin');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('jalan');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('jns_dpt');
            $table->boolean('disabilitas')->default(false);
            // $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('pencoblos');
    }
};
