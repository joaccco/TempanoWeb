<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name'  =>  'Evento',
            'slug'  =>  'evento',
            'color'  =>  'yellow'
        ]);

        Tag::create([
            'name'  =>  'Frio',
            'slug'  =>  'frio',
            'color'  =>  'blue'
        ]);

        Tag::create([
            'name'  =>  'Calor',
            'slug'  =>  'calor',
            'color'  =>  'red'
        ]);

        Tag::create([
            'name'  =>  'Fiestas',
            'slug'  =>  'fiestas',
            'color'  =>  'gray'
        ]);

        Tag::create([
            'name'  =>  'Equipos',
            'slug'  =>  'equipos',
            'color'  =>  'violet'
        ]);
    }
}
