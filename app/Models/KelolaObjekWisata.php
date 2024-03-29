<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaObjekWisata extends Model
{
    use HasFactory;

    protected $fillable = ['namaWisata', 'lokasi', 'kordinat', 'jamOperasional', 'jenisWisata', 'namaTiket', 'hargaTiket', 'fotoWisata'];
}
