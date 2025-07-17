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
        Schema::create('akta_lahirs', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id');
            $table->string('petugas_id')->nullable();
            $table->string('nomor_akta')->nullable();
            $table->date('tanggal_akta')->nullable();
            $table->date('tanggal_cetak')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('petugas_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akta_lahirs');
    }
};
