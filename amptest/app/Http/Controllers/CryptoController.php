<?php

namespace App\Http\Controllers;

use App\Crypto;
use Illuminate\Http\Request;

class CryptoController extends Controller
{
    public function index(Request $request)
    {
        $items = Crypto::all();
        return view('amp.index', ['items' => $items]);
    }
}
