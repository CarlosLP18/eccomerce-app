<?php

namespace Database\Seeders;

use App\Models\Plataforma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlataformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Plataforma = new Plataforma();
        $Plataforma->descripcion = "PC";
        $Plataforma->save();

        $Plataforma = new Plataforma();
        $Plataforma->descripcion = "Play Station 4";
        $Plataforma->save();

        $Plataforma = new Plataforma();
        $Plataforma->descripcion = "Xbox One";
        $Plataforma->save();

        $Plataforma = new Plataforma();
        $Plataforma->descripcion = "Nintendo Switch";
        $Plataforma->save();
    }
}
