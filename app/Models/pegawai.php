<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primeryKey = "id";
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'tglhr'
    ];
}
