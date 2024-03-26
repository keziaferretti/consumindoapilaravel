<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http as FacadesHttp;

class apiController extends Controller
{
    public function index()
    {
        $api = FacadesHttp::get('https://www.canalti.com.br/api/pokemons.json');
        $apiArray = $api->json();
        
        return view('api', ['apiArray' => $apiArray]);
    }
}
