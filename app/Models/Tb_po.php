<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tb_po extends Model
{
    // Kolom yang boleh diisi secara massal
    protected $fillable = ['kode_po', 'nama_proyek', 'tgl_turun_po'];

    // Relasi ke tabel spk
    public function tb_spks()
    {
        return $this->hasMany(Tb_spk::class);
    }
}
