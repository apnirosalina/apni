<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Vivo extends Model
{
    protected $table ="tb_vivo";
    protected $fillable =['type','harga','spesifikasi','image','toko'];

    public $timestamps = false;
}
