<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = DB::table('categorias')->get();
    }

    public function categoria_Insert($descripcion) {
        $categorias = DB::table('categorias')->insertGetId(
            ['descripcion' => $descripcion ]
        );
    }
}
