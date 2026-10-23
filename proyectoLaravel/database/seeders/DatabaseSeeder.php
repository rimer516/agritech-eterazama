<?php

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Cada create() = una fila nueva en la tabla productos.
        Producto::create(['nombre' => 'Arroz', 'precio' => 8]);
        Producto::create(['nombre' => 'Azúcar', 'precio' => 6]);
        Producto::create(['nombre' => 'Fideo', 'precio' => 5]);
    }
}
