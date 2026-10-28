@extends('layouts.base')

@section('contenido')

<style>
    /* Estilos exclusivos para el Login */
    .login-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 70vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-card {
        background: #ffffff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
        border-top: 5px solid #2e7d32; /* Verde Agritech */
    }

    .login-card h2 {
        text-align: center;
        color: #2e7d32;
        margin-bottom: 25px;
        font-size: 24px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
        font-size: 14px;
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        box-sizing: border-box;
        transition: all 0.3s ease;
    }

    .form-group input:focus {
        outline: none;
        border-color: #2e7d32;
        box-shadow: 0 0 8px rgba(46, 125, 50, 0.3);
    }

    .btn-login {
        width: 100%;
        padding: 14px;
        background-color: #2e7d32;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 10px;
    }

    .btn-login:hover {
        background-color: #1b5e20;
    }

    .error-msg {
        background-color: #ffebee;
        color: #c62828;
        padding: 12px;
        border-radius: 8px;
        margin-bottom: 20px;
        text-align: center;
        font-size: 14px;
        border: 1px solid #ffcdd2;
    }
</style>

<div class="login-wrapper">
    <div class="login-card">
        <h2>Entrar al Panel</h2>

        {{-- Si el intento anterior falló, mostramos el mensaje --}}
        @if (session('error'))
            <div class="error-msg">
                <strong>{{ session('error') }}</strong>
            </div>
        @endif

        {{-- CORREGIDO: action="/login" (le saqué el 2) --}}
        <form action="/login" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="admin@agritech.com" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn-login">Iniciar Sesión</button>
        </form>
    </div>
</div>

@endsection