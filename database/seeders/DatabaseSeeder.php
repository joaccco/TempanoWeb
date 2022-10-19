<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use App\Models\Category;
use App\Models\Tag;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');
        
        $this->call(CameraSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(FridgeSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(PointSaleSeeder::class);
        $this->call(ProductionSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SubstanceSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(WasteSeeder::class);

        $this->call(UserSeeder::class);
        Category::factory(5)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

}
