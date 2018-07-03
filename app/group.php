<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    protected $fillable = ['nimKetua','nimAnggota1','nimAnggota2','namainstansi','waktu_pelaksaan','waktu_selesai'];
}
