<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'Pemain';

    // Kolom-kolom yang dapat diisi (fillable) secara massal
    protected $fillable = [
        'nama_pemain', 'nomor_punggung', 'posisi',
    ];

    // Kolom yang sebaiknya disembunyikan dalam hasil JSON
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
