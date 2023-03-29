<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family =  Category::create([
             'name' => 'Family',
             'slug' => 'family'
         ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
         'user_id' => $user->id,
         'category_id' => $work->id,
         'title' => 'My family post',
         'slug' => 'my-first-post',
         'excerpt' => 'Lorem ipsum dolar sit amet.',
         'body' => 'Lorem ipsum dolar sit amet,consteeasrusa lorem'
         ]);

         Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My family post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum dolar sit amet,consteeasrusa lorem'
            ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
