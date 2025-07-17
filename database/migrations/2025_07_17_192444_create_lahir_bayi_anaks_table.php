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
        Schema::create('lahir_bayi_anaks', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('akta_lahir_id');
            $table->string('nama_lengkap')->nullable();
            $table->enum('tempat_dilahirkan', ['RS/RB', 'Puskesmas', 'Polindes', 'Rumah','Lainnya'])->nullable();
            $table->string('tempat_kelahiran')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->time('pukul')->nullable();
            $table->enum('jenis_kelahiran', ['Tunggal', 'Kembar 2', 'Kembar 3', 'Kembar 4','Lainnya'])->nullable();
            $table->integer('kelahiran_ke')->nullable();
            $table->enum('jenis_kelahiran', ['Tunggal', 'Kembar 2', 'Kembar 3', 'Kembar 4','Lainnya'])->nullable();
            $table->enum('penolong_kelahiran', ['Dokter', 'Bidan/Perawat', 'Dukun', 'Lainnya'])->nullable();
            $table->integer('berat_bayi')->nullable();
            $table->integer('panjang_bayi')->nullable();
            $table->timestamps();

            $table->foreign('akta_lahir_id')->references('id')->on('akta_lahirs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lahir_bayi_anaks');
    }
};
