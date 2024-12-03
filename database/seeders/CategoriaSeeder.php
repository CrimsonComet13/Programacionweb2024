<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB; 

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('categorias')->insert([
        ['nombre' => 'Camisas'],
        ['nombre' => 'Pantalones'],
        ['nombre' => 'Zapatos'],
        ['nombre' => 'Accesorios'],
    ]);
}
}