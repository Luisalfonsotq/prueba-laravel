<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class usuariosController extends Controller
{
    //
    public function index()
    {
        $usuarios = usuarios::all();
        return view('usuarios.index', compact('usuarios'));
    }


}
