<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
  public function index(Request $request)
  {
      $items = Favorites::all();
      return $items;
  }
}

