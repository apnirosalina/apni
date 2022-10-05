<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Samsung extends Model
{
  protected $table ="tb_samsung";
  protected $fillable =['type','harga','spesifikasi','image','toko'];
}
