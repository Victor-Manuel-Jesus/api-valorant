<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TitulosController extends Controller
{
    public function index_titulo(){
        $response = Http::get('https://valorant-api.com/v1/playertitles');
        $response = $response ->json() ;
        return view('titulos.index',compact('response'));
    }
}
