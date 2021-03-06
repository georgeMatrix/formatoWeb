<?php

use Illuminate\Database\Seeder;
use App\modelos\Categoria;
use App\modelos\Producto;
use App\modelos\Provedor;
use App\modelos\UnidadMedida;

class PVTTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categoria::class, 5)->create();
        factory(Provedor::class, 5)->create();
        factory(UnidadMedida::class, 5)->create();
        factory(Producto::class, 5)->create();
    }
}
