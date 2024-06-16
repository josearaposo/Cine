<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    public function proyecciones()
    {
        return $this->hasMany(Proyeccion::class);
    }

    public function cantidadEntradas()
    {
        $total = 0;
        // trabaja sobre la pelicula
        foreach ($this->proyecciones as $proyeccion) {
            $total += $proyeccion->entradas->count();
        }

        return $total;
    }
}
