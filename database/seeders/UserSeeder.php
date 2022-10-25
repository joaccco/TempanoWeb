<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Joaquin F',
            'email' => 'joaccofranc02@icloud.com',
            'password' => bcrypt('1234qwer'),
 
        ]);
        User::create([
            'name' => 'Luciano G',
            'email' => 'lucianog@icloud.com',
            'password' => bcrypt('luc1234'),
 
        ]);
        User::factory(20)->create();
    }
}
