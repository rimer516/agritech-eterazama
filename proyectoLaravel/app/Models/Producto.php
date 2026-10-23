<?php

// ================================================================
// LARAVEL 11 - clase 12
// El MODELO es la clase que habla con la tabla.
// Una clase = una tabla. Un objeto Producto = una fila.
// Gracias a Eloquent, esta clase ya sabe leer y guardar SIN escribir SQL.
// ================================================================

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Con qué tabla habla esta clase.
    protected $table = 'productos';

    // Qué columnas se pueden llenar desde un formulario.
    // Es un candado: lo que no está en esta lista, no entra. (id y timestamps los pone Laravel)
    protected $fillable = ['nombre', 'precio'];
}