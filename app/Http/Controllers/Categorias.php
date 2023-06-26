<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categorias extends Controller
{
    public function index(){
        return view('supermercado.categorias');
    }
}
