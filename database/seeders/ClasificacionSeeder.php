<?php

namespace Database\Seeders;

use App\Models\Clasificacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Clasificacion = new Clasificacion();
        $Clasificacion->descripcion ="C";
        $Clasificacion->save();

        $Clasificacion = new Clasificacion();
        $Clasificacion->descripcion ="E";
        $Clasificacion->save();

        $Clasificacion = new Clasificacion();
        $Clasificacion->descripcion ="E+10";
        $Clasificacion->save();

        $Clasificacion = new Clasificacion();
        $Clasificacion->descripcion ="T";
        $Clasificacion->save();

        $Clasificacion = new Clasificacion();
        $Clasificacion->descripcion ="M";
        $Clasificacion->save();

        $Clasificacion = new Clasificacion();
        $Clasificacion->descripcion ="RP";
        $Clasificacion->save();

        $Clasificacion = new Clasificacion();
        $Clasificacion->descripcion ="A";
        $Clasificacion->save();
    }
}
