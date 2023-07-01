<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PlayerCardController extends Controller
{
    public function index_player(){
        $response = Http::get('https://valorant-api.com/v1/playercards');
        $response = $response->json();
        return view('playerCard.index',compact('response'));
    }
}
