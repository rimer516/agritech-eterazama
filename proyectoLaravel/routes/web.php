<?php

use App\Http\Controllers\CatoController;
use App\Http\Controllers\CosechaController;
use App\Http\Controllers\CosechadorController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\SindicatoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Producto; // <--- AQUÍ ESTÁ LA LÍNEA QUE LE PEDÍ

// ─── App entry point (SPA) ───────────────────────────────────────────────────
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Hola', function () {
    return "Hola mundo";
});

//    El array de productos es EL MISMO de ayer en PHP puro...
Route::get('/inicio', function () {
    $productos = ['Abono', 'Fertilizante', 'fumigadora'];
    return view('inicio', ['productos' => $productos]);  // ...y viaja
});

Route::get('/productos', function () {
    $productos = Producto::all();  
    return view('productos', ['productos' => $productos]);
});

// 5) MOSTRAR EL FORMULARIO: esta ruta solo pinta la página, no guarda nada.
//    Fíjate que la URL es la misma de abajo, pero el método es GET (entrar a ve
Route::get('/productos/nuevo', function () {
    return view('productos-nuevo');
});

// 6) GUARDAR: misma URL, pero método POST (mandar datos).
//    Laravel elige esta ruta y no la de arriba por el METHOD del formulario.
Route::post('/productos/nuevo', function () {
    // request()->input('nombre') = "traeme lo que venía en el campo name="nombr
    // Es el $_POST['nombre'] de la clase 10, con mejor nombre.
    Producto::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]); // una linea = un INSERT

    // Guardado el dato, mandamos al usuario a la lista para que lo vea ahí.
    return redirect('/productos');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';