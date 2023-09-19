<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Categoria = new Categoria();
        $Categoria->descripcion = "Arcade";
        $Categoria->save();

        $Categoria = new Categoria();
        $Categoria->descripcion = "Simulación";
        $Categoria->save();

        $Categoria = new Categoria();
        $Categoria->descripcion = "Estrategia";
        $Categoria->save();

        $Categoria = new Categoria();
        $Categoria->descripcion = "Deportes";
        $Categoria->save();

        $Categoria = new Categoria();
        $Categoria->descripcion = "Acción";
        $Categoria->save();

        $Categoria = new Categoria();
        $Categoria->descripcion = "Rol";
        $Categoria->save();

        $Categoria = new Categoria();
        $Categoria->descripcion = "SandBox";
        $Categoria->save();

        $Categoria = new Categoria();
        $Categoria->descripcion = "Terror";
        $Categoria->save();
    }
}
