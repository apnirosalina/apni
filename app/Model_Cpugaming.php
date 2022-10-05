<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Cpugaming extends Model
{
  protected $table ="tb_cpugaming";
  protected $fillable =['type','harga','spesifikasi','image','toko'];
}
