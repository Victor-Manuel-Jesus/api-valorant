<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamemodeController extends Controller
{
    public function index_gamemode(){
        $response = Http::get('https://valorant-api.com/v1/gamemodes');
        $data = array(
            'data_gamemode' => $response ->json(),
        );
        return view('gamemodes.index',compact('data'));
    }
}
