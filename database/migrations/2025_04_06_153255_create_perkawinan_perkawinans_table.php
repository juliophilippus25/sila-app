<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perkawinan_perkawinans', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('akta_perkawinan_id');
            $table->date('tanggal_pemberkatan_perkawinan')->nullable();
            $table->date('tanggal_melapor')->nullable();
            $table->time('pukul')->nullable();
            $table->enum('agama', ['Islam', 'Kriten', 'Katolik', 'Hindu', 'Budha', 'Konghucu', 'Penghayat Kepercayaan','Lainnya'])->nullable();
            $table->string('organisasi_penghayat')->nullable();
            $table->string('nama_badan_peradilan')->nullable();
            $table->string('nomor_putusan_pengadilan')->nullable();
            $table->date('tanggal_putusan')->nullable();
            $table->string('nama_pemuka_agama')->nullable();
            $table->string('ijin_perwakilan')->nullable();
            $table->integer('jumlah_anak')->nullable();
            $table->json('anak')->nullable();
            $table->timestamps();

            $table->foreign('akta_perkawinan_id')->references('id')->on('akta_perkawinans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkawinan_perkawinans');
    }
};
