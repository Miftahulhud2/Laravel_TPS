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
        Schema::create('tps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suara_id');
            $table->foreignId('pengurus_id');
            $table->foreignId('saksi_id');
            $table->boolean('tutup')->default(false);
            $table->string('namatps');
            $table->string('slug');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('jalan');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('jml_srt_suara');
            $table->integer('jml_srt_rusak')->default(0);
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
        Schema::dropIfExists('tps');
    }
};
