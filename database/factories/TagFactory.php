<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use carbon\carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
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
            'tag_title'=>fake()->word(),
            'tag_description'=>fake()->sentence(),
            'tag_slug'=>'tag-'.uniqId(10),
            'tag_creator'=>1,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ];
    }
}
