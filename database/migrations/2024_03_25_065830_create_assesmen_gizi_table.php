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
        Schema::create('assesmen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('pasien');
            $table->date('tanggal_assesmen');
            $table->string('IMT');
            $table->string('status_gizi');
            $table->string('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesmens');
    }
};
