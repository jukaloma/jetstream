<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $datos=[
            [
                'idProducto' => '1000',
                'nombreProducto' => 'Jabon Rey',
                'cantidadProducto' => '100', 
                'precioProducto' => '2000',
                'fotoProducto' => '1.jpg',
                'categoria' => '10',               
            ],
            [
                'idProducto' => '2000',
                'nombreProducto' => 'Huawei Y9',
                'cantidadProducto' => '100', 
                'precioProducto' => '750000',
                'fotoProducto' => '2.jpg',
                'categoria' => '20',               
            ],
            [
                'idProducto' => '3000',
                'nombreProducto' => 'Comida de Gato',
                'cantidadProducto' => '3000', 
                'precioProducto' => '80000',
                'fotoProducto' => '3.jpg',
                'categoria' => '30',               
            ],
            [
                'idProducto' => '4000',
                'nombreProducto' => 'Sofa Cama',
                'cantidadProducto' => '20', 
                'precioProducto' => '2000000',
                'fotoProducto' => '4.jpg',
                'categoria' => '40',               
            ],
            [
                'idProducto' => '5000',
                'nombreProducto' => 'Halo Infinite',
                'cantidadProducto' => '2000', 
                'precioProducto' => '192000',
                'fotoProducto' => '5.jpg',
                'categoria' => '50',               
            ]
        ];

        DB::table('producto')->insert($datos);
    }
}
