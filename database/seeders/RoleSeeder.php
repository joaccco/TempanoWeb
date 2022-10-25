<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $Roles1=Role::create(['name' => 'admin']);
       $Roles2=Role::create(['name' => 'client']);

      Permission::create(['name' => 'Ver vista fabrica']);
      Permission::create(['name' => 'Ver Puntos de venta']);


    }
}
