<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use carbon\carbon;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cat_title'=>fake()->userName(),
            'cat_detail'=>fake()->paragraph(),
            'cat_slug'=>'cat_'.uniqId(),
            'cat_creator'=>1,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ];
    }
}
