<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function index() {
        $plataformas = DB::table('juegos')
            ->join('clasificacion', 'juegos.clasificacion_id', '=', 'clasificacions.id')
            ->join('plataformas', 'juegos.plataforma_id', '=', 'plataformas.id')
            ->join('categorias', 'juegos.categoria_id', '=', 'categorias.id')
            ->select(
                'juegos.id',
                'juegos.titulo',
                'juegos.descripcion',
                'juegos.fecha_lanzamiento',
                'juegos.online',
                'clasificacions.descripcion',
                'plataformas.descripcion',
                'categorias.descripcion',
                'juegos.precio_id'
            )
            ->get();
    }

    public function categoria_Insert($descripcion) {
        $plataformas = DB::table('plataformas')->insertGetId(
            ['descripcion' => $descripcion]
        );
    }
}
