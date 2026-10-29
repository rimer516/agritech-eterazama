@extends('layouts.base')

@section('title', 'Sobre Nosotros - Agritech Eterazama')

@section('contenido')

<style>
    /* Contenedor principal de la página */
    .about-wrapper {
        max-width: 900px;
        margin: 50px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Tarjeta principal */
    .about-card {
        background: #ffffff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border-top: 6px solid #2e7d32; /* Verde Agritech */
        text-align: center;
        margin-bottom: 30px;
    }

    .about-card h1 {
        color: #2e7d32;
        margin-bottom: 20px;
        font-size: 32px;
    }

    .about-card p {
        color: #555;
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* Línea decorativa */
    .divider {
        height: 2px;
        background: #e8f5e9;
        width: 100px;
        margin: 20px auto 30px auto;
        border-radius: 2px;
    }

    /* Sección de tarjetas (Misión/Visión) */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .feature-item {
        background: #ffffff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        text-align: center;
        border: 1px solid #eee;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .feature-icon {
        font-size: 40px;
        margin-bottom: 15px;
        display: inline-block;
    }

    .feature-item h3 {
        color: #333;
        margin-bottom: 10px;
        font-size: 20px;
    }

    .feature-item p {
        color: #666;
        font-size: 15px;
        line-height: 1.5;
    }
</style>

<div class="about-wrapper">
    
    {{-- Tarjeta Principal --}}
    <div class="about-card">
        <h1>Sobre Agritech S.R.L.</h1>
        <div class="divider"></div>
        <p>
            Somos una empresa agropecuaria establecida en <strong>Eterazama</strong>, comprometida con la atención de productores y clientes de la zona.
        </p>
        <p>
            Trabajamos día a día para ofrecer los mejores insumos, herramientas y asesoramiento, impulsando el crecimiento del campo y garantizando la mejor calidad en cada producto.
        </p>
    </div>

    {{-- Tarjetas secundarias (Para que se vea más profesional) --}}
    <div class="features-grid">
        
        <div class="feature-item">
            <span class="feature-icon">🌱</span>
            <h3>Compromiso</h3>
            <p>Apoyamos a los productores locales con insumos de primera calidad para el campo.</p>
        </div>

        <div class="feature-item">
            <span class="feature-icon">🤝</span>
            <h3>Cercanía</h3>
            <p>Conocemos a nuestra gente. Brindamos una atención personalizada y honesta.</p>
        </div>

        <div class="feature-item">
            <span class="feature-icon">📈</span>
            <h3>Desarrollo</h3>
            <p>Buscamos constantemente innovar para que el agro de Eterazama siga creciendo.</p>
        </div>

    </div>

</div>

@endsection