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
        Schema::create('perkawinan_administrasis', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('akta_perkawinan_id');
            $table->json('persyaratan')->nullable();
            $table->timestamps();

            $table->foreign('akta_perkawinan_id')->references('id')->on('akta_perkawinans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkawinan_administrasis');
    }
};
