<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // up() = lo que pasa al correr "php artisan migrate": CREAR la tabla.
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();                   // clave primaria, se autoincrementa sola
            $table->string('nombre');       // texto -> en la BD es VARCHAR
            $table->integer('precio');      // entero -> el precio en Bs, sin centavos
            $table->timestamps();           // regala created_at y updated_at (Laravel)
        });
    }

    // down() = el "deshacer" (artisan migrate:rollback): BORRAR la tabla.
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};