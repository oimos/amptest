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

class PageController extends Controller
{
    public function index(Request $request)
    {
      $parse_url = $this->parseUrl($request);
      $is_amp = $this->isAmp($parse_url);

      // canonical設定用URL
      $canonical_url = $this->getCanonicalUrl($request->url());
      $items = DB::table('cryptos')->get();

      if($is_amp){
        $styles = $this->getStyleCustom();
        // dd($styles);
        $message = 'AMP Page';
        $data = [
          'items' => $items,
          'message' => $message,
          'canonical_url' => $canonical_url,
          'styles' => $styles
        ];
        return view('amp.index')->with($data);
      } else {
        $message = 'Non AMP';
        return view('page', ["message" => $message, "canonical_url" => $canonical_url]);
      }
    }

    /**
     * URLをパースする
     * @param $request
     */
    private function parseUrl($url){
      return parse_url($url);
    }

    /**
     * URLからAMP頁か指定する
     * @param $parse_url
     * @return bool
     */
    private function isAmp($parse_url){
      if(strpos($parse_url['path'], '/amp') !== false){
        return true;
      } else {
        return false;
      }
    }

    private function getCanonicalUrl($url){
      if(strpos($url, '/amp/') !== false){
        return str_replace('/amp/', '', $url);
      } else {
       return $url;
      }
    }

    private function getStyleCustom(){
      $data = '';
      $data .= file_get_contents(public_path('css/app.css'));

      $target = array('@charset "UTF-8";');
      $change = array('');

      $data = str_replace($target,$change,$data);

      return $data;
    }
}
