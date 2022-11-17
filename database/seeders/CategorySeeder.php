<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use FactoryGenerator;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'  =>  'Hielos',
            'slug'  =>  'hielos',
            'description'  =>  'Nuestros productos'
        ]);

        Category::create([
            'name'  =>  'Eventos',
            'slug'  =>  'eventos',
            'description'  =>  'Cobertura de eventos'
        ]);

        Category::create([
            'name'  =>  'Felices Fiestas',
            'slug'  =>  'felices-fiestas',
            'description'  =>  'Tempano les desea Muy Felices Fiestas'
        ]);

        Category::create([
            'name'  =>  'Produccion',
            'slug'  =>  'produccion',
            'description'  =>  'Nuestra Produccion'
        ]);

        Category::create([
            'name'  =>  'Heladeras',
            'slug'  =>  'heladeras',
            'description'  =>  'Posts de nuestras Heladeras en los distintos Puntos de Venta'
        ]);
    }
}
