<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::factory(33)->create()->each(function ($post) {
            $nAnswers = random_int(1, 10);
            Answer::factory()->count($nAnswers)->for($post)->create();
        });
    }
}
