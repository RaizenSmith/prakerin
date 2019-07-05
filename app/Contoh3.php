<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contoh3 extends Model
{
    protected $fillable = ['nama', 'nis', 'kelas', 'alamat', 'jurusan'];
    // protected $visible = ['nis', 'kelas', 'alamat', 'jurusan'];
    // protected $hidden = ['nama'];
    public $timestamps = true;
}
