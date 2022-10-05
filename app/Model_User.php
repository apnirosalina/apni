<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_User extends Model
{
    protected $table ="users";
    protected $fillable =['nama','email'];
}
