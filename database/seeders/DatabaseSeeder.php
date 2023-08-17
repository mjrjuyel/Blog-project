<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            UserRoleSeeder::class,
        ]);
        \App\Models\Category::factory(10)->create();
        \App\Models\Tag::factory(15)->create();
        \App\Models\Post::factory(10)->create();

        // \App\Models\Post::factory()
        // ->hasAttached(\App\Models\Tag::factory(),15)
        // ->create(10);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
