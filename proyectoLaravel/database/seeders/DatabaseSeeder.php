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
        Producto::create(['nombre' => 'Abono', 'precio' => 450]);
        Producto::create(['nombre' => 'Fertilizante', 'precio' => 186]);
        Producto::create(['nombre' => 'Fumigadora', 'precio' => 805]);
    }
}
