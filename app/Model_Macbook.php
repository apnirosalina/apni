<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Macbook extends Model
{
  protected $table ="tb_macbook";
  protected $fillable =['type','harga','spesifikasi','image','toko'];
}
