<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'   =>   'Hielo Rolito - Bolsa de 2kg',
            'code'   =>   '002rolito',
            'price'   =>   '$100,00',
            'detail'   =>   'Dimenciones: 30 x 45cm',
            'stock'  =>  '40',
            'alert'  =>  '40'
        ]);

        Product::create([
            'name'   =>   'Hielo Rolito - Bolsa de 5kg',
            'code'   =>   '005rolito',
            'price'   =>   '$190,00',
            'detail'   =>   'Dimenciones: 45 x 70cm',
            'stock'  =>  '40',
            'alert'  =>  '40'
        ]);

        Product::create([
            'name'   =>   'Hielo Rolito - Bolsa de 10kg',
            'code'   =>   '0010rolito',
            'price'   =>   '$280,00',
            'detail'   =>   'Dimenciones: 45 x 100cm',
            'stock'  =>  '40',
            'alert'  =>  '40'
        ]);
    }
}
