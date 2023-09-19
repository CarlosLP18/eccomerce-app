<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Clasificacion;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    public function index(Request $request) {
        $clasificacions = Clasificacion::mainSearch(collect($request -> all()));
        return view('',compact('clasificacions'));
    }

    public function clasificacion_Insert($descripcion) {
        $clasificacions = DB::table('clasificacions')->insertGetId(
            ['descripcion' => $descripcion]
        );
    }
}
