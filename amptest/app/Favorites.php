<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
  public $table = "favorites";

  public static $rules = array(
      'value' => 'required',
      'count' => 'integer|min:0',
  );

  public $timestamps = false;
}
