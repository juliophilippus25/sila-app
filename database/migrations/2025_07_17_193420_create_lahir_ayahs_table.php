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
        Schema::create('lahir_ayahs', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('akta_lahir_id');
            $table->string('nik')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('alamat')->nullable();
            $table->enum('kewarganegaraan', ['WNI', 'WNA'])->nullable();
            $table->string('kebangsaan')->nullable();
            $table->date('tanggal_pencatatan_perkawinan')->nullable();
            $table->timestamps();

            $table->foreign('akta_lahir_id')->references('id')->on('akta_lahirs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lahir_ayahs');
    }
};
