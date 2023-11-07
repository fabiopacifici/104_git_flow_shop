<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
            $new_product = new Product();
            $new_product->title = $faker->realText(50);
            $new_product->image = $faker->imageUrl();
            $new_product->price = $faker->randomFloat(2, 0, 999);
            $new_product->description = $faker->realText(300);
            $new_product->save();
        }
    }
}
