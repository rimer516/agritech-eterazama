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

// 3) Otra página que HEREDA el mismo layout: el header y el footer

/* 
// ─── API Routes ───────────────────────────────────────────────────────────────
Route::prefix('api')->as('api.')->group(function () {

    // Usuarios (for selects)
    Route::get('usuarios', function() {
        return \App\Models\User::all();
    });

    // Sindicatos
    Route::apiResource('sindicatos', SindicatoController::class);

    // Catos
    Route::apiResource('catos', CatoController::class);

    // Cosechadores
    Route::apiResource('cosechadores', CosechadorController::class)->parameters([
        'cosechadores' => 'cosechador'
    ]);

    // Cosechas
    Route::apiResource('cosechas', CosechaController::class);
    Route::post('cosechas/bulk', [CosechaController::class, 'storeBulk']);
    Route::post('cosechas/finalizar', [CosechaController::class, 'finalizarPorCosechador']);

    // Pagos
    Route::apiResource('pagos', PagoController::class);
    Route::put('pagos/{pago}/pagar', [PagoController::class, 'pagar']);

    // Configuracion
    Route::get('configuracion', [ConfiguracionController::class, 'show']);
    Route::put('configuracion', [ConfiguracionController::class, 'update']);

    // Reportes
    Route::get('reportes', [ReporteController::class, 'index']);
    Route::get('reportes/pdf/datos', [ReporteController::class, 'datosReportePdf']);
    Route::get('reportes/{cosechador}', [ReporteController::class, 'detalleCosechador']);
}); */

// ─── Cocatop Inertia Routes ───────────────────────────────────────────────────
/* Route::middleware(['auth', 'verified'])->group(function () {
    // Sindicatos
    Route::get('sindicatos', function () {
        return Inertia::render('Sindicatos/Index');
    })->name('sindicatos.index');
}); */

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
