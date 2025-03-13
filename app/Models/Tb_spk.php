<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tb_spk extends Model
{
    // Kolom yang boleh diisi secara massal
    protected $fillable = ['po_id', 'kode_spk', 'nama_barang', 'ukuran_barang', 'jumlah', 'jumlah_tambah', 'satuan', 'tgl_pembuatan_spk'];

    // Relasi ke tabel PO
    public function tb_pos()
    {
        return $this->belongsTo(Tb_po::class);
    }

}
