<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AgenteValorantController extends Controller
{
    public function index_agente(){

        return view('agente.index');
    }

    public function get_data(){
        $response = Http::get('https://valorant-api.com/v1/agents');
        $data = array(
            $response->json(),
        );
        return response($data,200);
    }
}
