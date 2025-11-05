<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UniversityController extends Controller
{
    public function index( Request $request)
    {
        $country = 'Colombia';
        $name = $request->query('name');

        $response = Http::get('http://universities.hipolabs.com/search', ['country' => $country, 'name' => $name,]);

        if($response->failed()){
            return response()->json(['error' => 'Error al obtener los datos'], 500);
        }

        return response()->json($response->json());
    }
}
