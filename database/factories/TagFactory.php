<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Promo',
                'Terbaru',
                'Best Seller',
                'Rekomendasi',
                'Murah',
                'Premiun',
                'Populer',
                'Limited',
            ])
        ];
    }
}
