<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'category',
        'description',
        'address',
        'file',
        'status',
        'progress',
    ];
}

