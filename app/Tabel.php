<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabel extends Model
{
    protected $fillable = [
        'nis', 'name', 'jns_kelamin', 'temp_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah', 'kelas', 'jurusan'
    ];
}
