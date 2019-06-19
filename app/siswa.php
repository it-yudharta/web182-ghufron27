<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table="siswa";
    protected $primaryKey="id";
    protected $fillable=['nama','umur','alamat','no_hp'];
}
