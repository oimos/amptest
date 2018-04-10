<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

use App\Http\Resources\FavoriteResource;
use App\Favorites;
use App\Http\Resources\CryptoResource;
use App\Crypto;
use App\Http\Requests\PostRequest;

class AmpController extends Controller
{
    public function index(Request $request)
    {
        $styles = $this->getStyleCustom();

        if (isset($request->name))
        {
            $param = ['name' => $request->name];
            $items = DB::select('select * from cryptos where name = :name', $param);
        } else {
            $items = DB::table('cryptos')->get();
        }
        return view('amp.index', ['items' => $items, 'styles' => $styles]);
    }

    public function show(Request $request)
    {
        $name = $request->name;
        $items = DB::table('cryptos')->where('name', $name)->get();
        return view('amp.index', ['items' => $items]);
    }

    public function getFavoriteData(Request $request)
    {
      // return new FavoriteResource(Favorites::all());
      $items = DB::table('favorites')->get();
      return $items;
    }

    public function storeFavoriteData(Request $request)
    {
      // DB::table('favorites')
      //       ->where('value', 1)
      //       ->update(['count' => 70]);
      $favorites = new Favorites;
      $favorites->value = $request->input('value');
      $favorites->count = $request->input('count');

      $favorites->save();

      $items = DB::table('favorites')->get();

      // dd($items);
      return view('amp.index', ['items' => $items]);
    }

    public function updateFavoriteData(Request $request)
    {
      $favorites = new Favorites;
      $favorites->value = $request->input('value');
      $favorites->count = $request->input('count');
      $favorites->save();
    }

    public function getdata(Request $request)
    {
        // $name = $request->name;
        // $items = DB::table('cryptos')->where('name', $name)->get();
        // return $items;
        return new CryptoResource(Crypto::all());
    }

    public function getStyleCustom(){
        $data = '';
        $data .= file_get_contents(public_path('css/app.css'));

        $target = array('@charset "UTF-8";');
        $change = array('');

        $data = str_replace($target,$change,$data);

        return $data;
    }
}
