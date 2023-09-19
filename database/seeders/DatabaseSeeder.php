<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create(); //was trying to create a seeder for the categories table
        \App\Models\Product::factory(20)->create(); //was trying to create a seeder for the categories table


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // factory(\App\Category::class, 10)->create();

            // $this->call(CategorySeeder::class);
        
    }
}
