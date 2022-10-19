<?php

namespace Database\Seeders;

use App\Models\PointSale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fridge;
use App\Models\User;

class PointSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $pointsales = PointSale::factory(40)->create();
       foreach ($pointsales as $pointsale) {
           Fridge::factory(50)->create([
               'fridge_id' => $pointsale->id
           ]);

           User::factory(50)->create([
            'user_id' => $pointsale->id
        ]);
       } */
    }
}