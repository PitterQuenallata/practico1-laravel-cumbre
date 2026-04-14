<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Producto 1
        Producto::create([
            'nombre' => 'Laptop Gamer',
            'descripcion' => 'Laptop potente con 16GB de RAM y tarjeta de video RTX',
            'precio' => 1250.50,
            'stock' => 10
        ]);
        // Producto 2
        Producto::create([
            'nombre' => 'Ratón Inalámbrico',
            'descripcion' => 'Ratón ergonómico con batería de larga duración',
            'precio' => 25.99,
            'stock' => 50
        ]);
        // Producto 3
        Producto::create([
            'nombre' => 'Teclado Mecánico',
            'descripcion' => 'Teclado con switches mecánicos',
            'precio' => 85.00,
            'stock' => 20
        ]);
    }
}
