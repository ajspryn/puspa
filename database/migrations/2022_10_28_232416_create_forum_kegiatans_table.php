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
        Schema::create('forum_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('mitra_id')->nullable();
            $table->string('jenis_kegiatan_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('foto')->nullable();
            $table->text('slug')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('tujuan_dan_manfaat')->nullable();
            $table->text('pihak_yang_terlibat')->nullable();
            $table->text('kebutuhan_sumberdaya')->nullable();
            $table->text('sasaran')->nullable();
            $table->string('status_tahapan')->nullable();
            $table->string('persentase_progres')->nullable();
            $table->string('keterangan_status_kegiatan')->nullable();
            $table->text('analisis_resiko')->nullable();
            $table->text('strategi_menjaga_keberlangsungan')->nullable();
            $table->text('indikator_keberhasilan')->nullable();
            $table->string('lampiran')->nullable();
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
        Schema::dropIfExists('forum_kegiatans');
    }
};
