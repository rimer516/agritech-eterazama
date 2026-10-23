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

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';