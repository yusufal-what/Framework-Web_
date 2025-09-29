<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uts extends Model
{
    protected $table = 'uts';   // nama tabel
    protected $primaryKey = 'uts_id'; // primary key
    protected $fillable = ['nama_matkul', 'jumlah_sks', 'keterangan'];
}
