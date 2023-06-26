<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'idCategoria' => '10',
                'nombreCategoria' => 'Aseo',
                'descripcion' => 'productos para el Aseo del hogar',                
            ],
            [
                'idCategoria' => '20',
                'nombreCategoria' => 'Tecnologia',
                'descripcion' => 'Productos tecnologicos como televisores',                
            ],
            [
                'idCategoria' => '30',
                'nombreCategoria' => 'Mascotas',
                'descripcion' => 'productos para el aseo y cuidado mascota',                
            ],
            [
                'idCategoria' => '40',
                'nombreCategoria' => 'Hogar',
                'descripcion' => 'productos como muebles armarios etc',                
            ],
            [
                'idCategoria' => '50',
                'nombreCategoria' => 'Juegos',
                'descripcion' => 'juegos para consolas  tales como xbox play',                
            ]
        ];

    
    DB::table('categoria')->insert($datos);

    }
}
