<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table = 'data_siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = [];
    protected $guarded = [];
}
