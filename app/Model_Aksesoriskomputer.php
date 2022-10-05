<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Aksesoriskomputer extends Model
{
  protected $table ="tb_aksesoriskomputer";
  protected $fillable =['type','harga','spesifikasi','image','toko'];
}
