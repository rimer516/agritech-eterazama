<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
         // 1. CREAR EL USUARIO (Solo si no existe)
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'], // Busca si este correo ya está
            ['password' => Hash::make('123456789')] // Si no está, lo crea con esta clave
        );

    }
}