<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
   protected $table = 'mahasiswa';
   protected $fillable = ['nama_mahasiswa','npm_mahasiswa','jenis_kelamin','agama','alamat'];
}
