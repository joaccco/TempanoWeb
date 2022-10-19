<?php

namespace Database\Seeders;

use App\Models\Fridge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FridgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fridge::create([
            'number'   =>   '1',   
            'brand'   =>   'Polair',
            'capability'   =>   '150LT'
        ]);

        Fridge::create([
            'number'   =>   '2',
            'brand'   =>   'Polair',
            'capability'   =>   '300LT'
        ]);

        Fridge::create([
            'number'   =>   '4',
            'brand'   =>   'Polair',
            'capability'   =>   '600LT'
        ]);

        Fridge::create([
            'number'   =>   '5',
            'brand'   =>   'Friomex',
            'capability'   =>   '150LT'
        ]);
    }
}
