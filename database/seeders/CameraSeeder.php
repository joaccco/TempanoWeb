<?php

namespace Database\Seeders;

use App\Models\Camera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Camera::create([
            'number'   =>   '1',
            'Brand'   =>   'Thermo King',
            'detail'   =>   'Camara: Reefer 12MT'
        ]);
        Camera::create([
            'number'   =>   '2',
            'Brand'   =>   'Thermo King',
            'detail'   =>   'Camara: Reefer 12MT'
        ]);
        Camera::create([
            'number'   =>   '3',
            'Brand'   =>   'Carrier',
            'detail'   =>   'Camara: Reefer 12MT'
        ]);
        Camera::create([
            'number'   =>   '4',
            'Brand'   =>   'Carrier',
            'detail'   =>   'Camara: Reefer 12MT (Exterior)'
        ]);
    }
}
