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
        Schema::create('perkawinan_istris', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('akta_perkawinan_id');
            $table->string('nik', 16)->unique();
            $table->string('nomor_kk', 16)->nullable();
            $table->string('nomor_paspor')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->enum('pendidikan_terakhir', ['Tidak/Belum Sekolah', 'Belum Tamat SD', 'SD/Sederajat', 'SLTP/Sederajat', 'SLTA/Sederajat', 'Diploma I/II', 'Akademi/Diploma III/S. Muda', 'Diploma IV/Strata I', 'Strata II', 'Strata III'])->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu', 'Penghayat Kepercayaan','Lainnya'])->nullable();
            $table->string('organisasi_penghayat')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'])->nullable();
            $table->integer('perkawinan_ke')->nullable();
            $table->enum('kewarganegaraan', ['WNI', 'WNA'])->nullable();
            $table->string('kebangsaan')->nullable();
            $table->timestamps();

            $table->foreign('akta_perkawinan_id')->references('id')->on('akta_perkawinans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkawinan_istris');
    }
};
