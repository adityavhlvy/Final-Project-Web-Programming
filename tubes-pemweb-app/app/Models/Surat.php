<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'nama_orangtua',
        'umur',
        'pekerjaan',
        'no_telepon',
        'alamat',
        'nama_mahasiswa',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'jurusan',
        'fakultas',
        'tanggal',
        'jumlah_penghasilan',
    ];
}
