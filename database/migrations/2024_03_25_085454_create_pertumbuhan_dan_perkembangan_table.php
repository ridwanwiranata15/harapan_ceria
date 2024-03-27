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
        Schema::create('pertumbuhan_dan_perkembangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('pasien');
            $table->string('usia');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('lingkar_kepala');
            $table->string('tahap_perkembangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertumbuhan_dan_perkembangans');
    }
};
