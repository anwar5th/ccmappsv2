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
        Schema::create('tb_spks', function (Blueprint $table) {
            $table->id(); // Kolom ID unik untuk setiap produk
            $table->unsignedBigInteger('po_id'); // ID dari kategori po, tipe data unsignedBigInteger
            $table->string('kode_spk'); // kode SPK, tipe data string
            $table->string('nama_barang'); // nama barang, tipe data string
            $table->string('ukuran_barang'); // ukuran barang, tipe data string
            $table->decimal('jumlah', 5); // jumlah barang, tipe data decimal dengan 5 digit total
            $table->decimal('jumlah_tambah', 5); // jumlah tambah barang, tipe data decimal dengan 5 digit total
            $table->string('satuan'); // satuan barang, tipe data string
            $table->date('tgl_pembuatan_spk'); // tanggal pembuatan spk, tipe data date
            $table->timestamps(); // Kolom untuk mencatat waktu pembuatan dan perubahan data

            // Relasi antara spk dan po (Foreign Key)
            $table->foreign('po_id')->references('id')->on('tb_pos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_spks');
    }
};
