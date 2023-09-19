<?php

namespace Database\Factories;

// use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;


/** 
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
 class ProductFactory extends Factory
{     
        /**
         * Define the model's default state.     *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            $category = Category::factory()->create(); //this will create a relationship btn the product and category using foreign key 
                return [
                    'name' => fake()->word(),
                    'category_id' => $category->id,
                    'description' => fake()->paragraph(),
                    'price' => rand(1000, 99999)
                    
                ];
        }
 }

///////////////////////////////////////////////////////////////////////////////////////////////////////////
// use App\Models\Product;
// // use App\Models\Category;
// // use Illuminate\Database\Eloquent\Factories\Factory;

// $factory->define(Product::class, function () {
//     // Use the factory method to create a Category and get its ID
//     $category = Category::factory()->create();

//     return [
//         'name' => fake()->word,
//         'category_id' => $category->id, // Set the category_id foreign key
//         'description' => fake()->paragraph,
//         'price' => fake()->randomNumber(4),
//         // Add other product attributes here if needed
//     ];
// });
// In the ProductFactory, we use the Category::factory()->create() method to create a new category and obtain its ID. Then, we use that ID as the category_id foreign key when defining the product attributes.

// With this setup, when you use the ProductFactory to create fake product records, each product will be associated with a randomly generated category.






