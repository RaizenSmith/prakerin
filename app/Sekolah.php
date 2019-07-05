<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = ['nama', 'umur', 'kelas', 'hobby', 'jurusan'];
    public $timestamps = true;
}
