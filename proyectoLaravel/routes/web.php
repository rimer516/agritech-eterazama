<?php

use App\Http\Controllers\CatoController;
use App\Http\Controllers\CosechaController;
use App\Http\Controllers\CosechadorController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\SindicatoController;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Producto; // <--- AQUÍ ESTÁ LA LÍNEA QUE LE PEDÍ
use App\Models\Torta; // <--- AQUÍ ESTÁ LA LÍNEA QUE LE PEDÍ
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});

// 5) MOSTRAR EL FORMULARIO: esta ruta solo pinta la página, no guarda nada.
//    Fíjate que la URL es la misma de abajo, pero el método es GET (entrar a ve
Route::get('/productos/nuevo', function () {
    return view('productos-nuevo');
})->middleware('auth');



// 6) GUARDAR: misma URL, pero método POST (mandar datos).
Route::post('/productos/nuevo', function () {
    
    // 1. LA VALIDACIÓN (Esto es lo que frena el error de SQLite)
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
    ], [
        'nombre.required' => 'Ingresa el nombre del producto.',
        'precio.required' => 'Ingresa el precio del producto.',
        'precio.numeric' => 'El precio debe ser un número.',
    ]);

    // 2. SI PASA LA VALIDACIÓN, GUARDAMOS
    Producto::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]); 

    // 3. REDIRIGIMOS
    return redirect('/productos');
})->middleware('auth');



Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login2');
})->middleware('auth');




/* // 7) LA PUERTA: solo pinta el formulario de entrada. No verifica nada todavía.
Route::get('/login2', function () {
    return view('login2');
})->name('login2');

// 8) LA CERRADURA: acá se verifica la llave.
//    Auth::attempt busca el correo en la tabla users y compara la contraseña
//    contra el revoltijo guardado. Devuelve true o false, nada más.
Route::post('/login2', function () {
    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        // Sesión nueva apenas entra: si alguien espiaba la anterior, ya no le sirve.
        request()->session()->regenerate();

        return redirect('/panel');
    }
    // back() = "volvé a la página de donde veníamos", con un mensaje en el bolsillo.
    return back()->with('error', 'Correo o contraseña incorrectos.');
});
 */

Route::get('/login2', function () {
    return view('login2');
})->name('login2');

Route::post('/login2', function (Request $request) {
    $credenciales = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credenciales)) {
        $request->session()->regenerate();

        return redirect()->intended('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});




// cualquier imagen de otra página y te sacaría de la sesión sin querer.
Route::post('/logout', function () {
    Auth::logout();

    return redirect('/inicio');
});


// 10) EL PANEL DEL DUEÑO — la primera página PRIVADA del curso.
//     Sin ->middleware('auth') esto sería una página común. Con él, Laravel
//     revisa la llave ANTES de ejecutar una sola línea de acá adentro.
Route::get('/panel', function () {
    $productos = Producto::all();
    return view('panel', ['productos' => $productos]);
})->middleware('auth');








Route::get('/tortas', function () {
    $tortas = Torta::all();
    return view('tortas.index', ['tortas' => $tortas]);
});

Route::get('/tortas/nuevo', function () {
    return view('tortas.nuevo');
});

Route::post('/tortas/nuevo', function () {
    $datos = request()->validate([
        'sabor' => 'required',
        'precio' => 'required|integer',
    ], [
        'sabor.required' => 'Indica el sabor de la torta.',
        'precio.required' => 'Indica el precio de la torta.',
        'precio.integer' => 'El precio va en digitos, sin centavos.',
    ]);

    Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/tortas');
});






require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::post('/tortas/nuevo', function () {
    $datos = request()->validate([
        'sabor'  => 'required|string|min:2|max:100',
        'precio' => 'required|integer|min:1|max:100000',
    ], [
        'sabor.required' => 'Indica el sabor de la torta.',
        'sabor.string'   => 'El sabor debe ser texto.',
        'sabor.min'      => 'El sabor debe tener al menos 2 caracteres.',
        'sabor.max'      => 'El sabor no puede superar 100 caracteres.',

        'precio.required' => 'Indica el precio de la torta.',
        'precio.integer'  => 'El precio va en dígitos, sin centavos ni símbolos.',
        'precio.min'      => 'El precio debe ser mayor a 0.',
        'precio.max'      => 'El precio es demasiado alto.',
    ]);

    // Si la validación falla, Laravel ya redirige con los errores.
    // Si pasa, $datos ya viene limpio y validado.
    Torta::create($datos);

    return redirect('/tortas')->with('ok', 'Torta guardada correctamente.');
});