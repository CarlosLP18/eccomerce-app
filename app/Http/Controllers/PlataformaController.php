<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PlataformaController extends Controller
{
    public function index() {
        $plataformas = DB::table('plataformas')->get();
    }

    public function categoria_Insert($descripcion) {
        $plataformas = DB::table('plataformas')->insertGetId(
            ['descripcion' => $descripcion]
        );
    }
}
