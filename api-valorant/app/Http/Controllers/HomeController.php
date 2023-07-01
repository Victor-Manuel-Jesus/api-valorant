<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use OpenAI\Laravel\Facades\OpenAI;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function consultas(){
        return view('consulta');
    }
    public function consulta_respuesta(Request $request){
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $request->input('pregunta'),
        ]);

        echo $result['choices'][0]['text'];

    }
}
