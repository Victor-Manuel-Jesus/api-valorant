<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LevelBorderController extends Controller
{
    public function index_lvlBorder(){
        $response = Http::get('https://valorant-api.com/v1/levelborders');
        $response = $response->json();

        return view('levelBorder.index',compact('response'));
    }
}
