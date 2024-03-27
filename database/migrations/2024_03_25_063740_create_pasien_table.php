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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('nomor_telepon');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O', 'AB+']);
            $table->string('status_pernikahan');
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'buddha', 'hindu', 'kong hu chu']);
            $table->string('pekerjaan');
            $table->string('nama_asuransi');
            $table->string('nomor_assuransi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
