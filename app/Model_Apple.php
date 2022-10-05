<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Apple extends Model
{
    protected $table ="tb_apple";
    protected $fillable =['type','harga','spesifikasi','image','toko'];
}
