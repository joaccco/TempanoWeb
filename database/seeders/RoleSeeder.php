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
       $Role1=Role::create(['name' => 'admin']);
       $Role2=Role::create(['name' => 'client']);

       Permission::create(['name' => 'admin.pointsales'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.tags.index'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.users.index'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.users.edit'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.tags.create'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.tags.destroy'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.post.index'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.index'])->syncRoles([$Role1,$Role2]);
       Permission::create(['name' => 'admin.post.create'])->syncRoles([$Role1,$Role2]);
       Permission::create(['name' => 'admin.post.edit'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.post.destroy'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.cameras.index'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.fridge.index'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.products.index'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.fridge.edit'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.products.edit'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.fridge.create'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.products.create'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.fridge.destroy'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.products.destroy'])->syncRoles([$Role1]);
       Permission::create(['name' => 'admin.home.index'])->syncRoles([$Role1,$Role2]);


    }
}
