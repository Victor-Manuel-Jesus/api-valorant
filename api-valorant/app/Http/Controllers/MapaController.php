<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapaController extends Controller
{
    public function index_mapa(){
        $response = Http::get('https://valorant-api.com/v1/maps');
        $data=array(
            'data_mapa'=>$response->json(),
        );
        return view('mapa.index',compact('data'));
    }
}
