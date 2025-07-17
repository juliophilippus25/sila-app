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
        Schema::create('lahir_saksis', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('akta_lahir_id');
            $table->json('saksi_1');
            $table->json('saksi_2');
            $table->timestamps();

            $table->foreign('akta_lahir_id')->references('id')->on('akta_lahirs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lahir_saksis');
    }
};
