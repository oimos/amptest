<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    public $table = "cryptos";

    public static $rules = array(
        'name' => 'required',
        'price' => 'integer|min:0',
        'img' => 'string|min:0',
    );

    public $timestamps = false;
}
