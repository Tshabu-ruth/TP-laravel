<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        \App\Models\Category::factory(5)->create()->each(function ($category) {
            \App\Models\Post::factory(10)
                ->for($category)
                ->create()
                ->each(function ($post) {
                    \App\Models\Comment::factory(5)->create([
                        'post_id' => $post->id
                    ]);
                });
        });
    }
}
