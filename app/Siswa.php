<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['NIM','nama','kelas', 'alamat', 'notelp', 'image'];
}
