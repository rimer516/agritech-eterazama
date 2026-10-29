@extends('layouts.base')

@section('title', 'Contacto - Agritech Eterazama')

@section('contenido')

<style>
    .contact-wrapper {
        max-width: 1000px;
        margin: 50px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .contact-header h1 {
        color: #2e7d32;
        font-size: 32px;
        margin-bottom: 10px;
    }

    .contact-header p {
        color: #666;
        font-size: 16px;
    }

    /* Grilla de 2 columnas */
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 30px;
    }

    /* Estilos de la columna de información */
    .contact-info {
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border-top: 6px solid #2e7d32;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .info-icon {
        font-size: 24px;
        background: #e8f5e9;
        padding: 10px;
        border-radius: 50%;
        margin-right: 15px;
        color: #2e7d32;
    }

    .info-text h3 {
        margin: 0 0 5px 0;
        color: #333;
        font-size: 16px;
    }

    .info-text p {
        margin: 0;
        color: #666;
        font-size: 14px;
        line-height: 1.4;
    }

    /* Estilos del formulario */
    .contact-form {
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    .contact-form h2 {
        color: #333;
        margin-top: 0;
        margin-bottom: 20px;
        font-size: 22px;
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

    .form-group input, 
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        box-sizing: border-box;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .form-group input:focus, 
    .form-group textarea:focus {
        outline: none;
        border-color: #2e7d32;
        box-shadow: 0 0 8px rgba(46, 125, 50, 0.3);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .btn-enviar {
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
    }

    .btn-enviar:hover {
        background-color: #1b5e20;
    }

    /* Diseño responsive para celulares */
    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="contact-wrapper">
    
    <div class="contact-header">
        <h1>Ponte en Contacto</h1>
        <p>¿Tenés alguna duda o consulta? Escribinos y te responderemos a la brevedad.</p>
    </div>

    <div class="contact-grid">
        
        {{-- COLUMNA IZQUIERDA: Información --}}
        <div class="contact-info">
            <div class="info-item">
                <div class="info-icon">📍</div>
                <div class="info-text">
                    <h3>Dirección</h3>
                    <p>Eterazama, Cochabamba<br>Bolivia</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">📞</div>
                <div class="info-text">
                    <h3>Teléfono</h3>
                    <p>+591 70000000</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">✉️</div>
                <div class="info-text">
                    <h3>Correo Electrónico</h3>
                    <p>contacto@agritech.com</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">🕒</div>
                <div class="info-text">
                    <h3>Horario de Atención</h3>
                    <p>Lunes a Domingo<br>08:00 AM - 20:00 PM</p>
                </div>
            </div>
        </div>

        {{-- COLUMNA DERECHA: Formulario --}}
        <div class="contact-form">
            <h2>Envianos un mensaje</h2>
            
            {{-- Si en el futuro querés procesar el formulario, apuntá el action a una ruta POST --}}
            <form action="#" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="form-group">
                    <label for="asunto">Asunto:</label>
                    <input type="text" id="asunto" name="asunto" placeholder="¿En qué te podemos ayudar?" required>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribí tu mensaje aquí..." required></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar Mensaje</button>
            </form>
        </div>

    </div>
</div>

@endsection