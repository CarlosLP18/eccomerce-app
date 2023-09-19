<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    public function Clasificacion() {
        return $this->belongsTo(Clasificacion::class);
    }

    public function Plataforma() {
        return $this->belongsToMany(Plataforma::class);
    }

    public function Categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function Precio() {
        return $this->belongsTo(Precio::class);
    }
}
