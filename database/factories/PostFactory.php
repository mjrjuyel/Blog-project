<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Ar;
use carbon\carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_title'=>fake()->sentence($nbWords = 2, $variableNbWords = true),
            'post_detail'=>fake()->text($maxNbChars = 200),
            'post_pic1'=>fake()->image('public/uploads/admin/post/',400, 300, null, false),
            'post_creator'=>1,
            'cat_id'=>rand(4, 15),
            'post_slug'=>'post-'.uniqId(),
            'published_at'=>carbon::now()->toDateTimeString(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ];
    }
}
