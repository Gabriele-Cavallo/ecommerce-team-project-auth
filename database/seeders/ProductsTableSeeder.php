<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $newProduct = new Product();
            $newProduct->name = $faker->sentence(2);
            $newProduct->slug = Str::slug($newProduct->name, '-');
            $newProduct->price = $faker->randomFloat(2, 10, 9000);
            $newProduct->description = $faker->text(500);
            $newProduct->img = 'https://picsum.photos/200/300';
        }
    }
}
