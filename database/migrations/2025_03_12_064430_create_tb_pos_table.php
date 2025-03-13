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
        Schema::create('tb_pos', function (Blueprint $table) {
            $table->id(); // Kolom ID unik untuk setiap kategori
            $table->string('kode_po'); // kode po, tipe data string
            $table->string('nama_proyek'); // Nama proyek, tipe data string
            $table->date('tgl_turun_po'); // tgl turun po, tipe data date
            $table->timestamps(); // Kolom untuk mencatat waktu pembuatan dan perubahan data
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pos');
    }
};
