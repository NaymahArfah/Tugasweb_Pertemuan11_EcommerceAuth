<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => \App\Models\Category::inRandomOrder()->value('id'),
            'user_id' => \App\Models\User::inRandomOrder()->value('id'),
            'name'=> fake()->randomElement([
                'Wireles Earbuds Pro',
                'Samrtwatch AMOLED',
                'Keyboard Mechanical RGB',
                'Mouse Wireless',
                'Power Bank 20000mAh',
                'Kaos Oversize Premium',
                'Hoodie Basic Unisex',
                'Tas Selempang Casual',
                'Sepatu Sneakers Casual',
                'Parfum Eau de Parfum',
                'Lip Cream Matte',
                'Serum Wajah Brightening',
                'Rak Penyimpanan Minimalis',
                'Botol Minum Stainless',
                'Yoga Mat Premiun',
            ]),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 25000, 5000000),
            'stock' => fake()->numberBetween(1, 100),
        ];
    }
}
