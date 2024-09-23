<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            "name" => "bryan jonathan",
            "email" => "abang@yahoo.com",
            "password" => bcrypt("54321")
        ]);
        User::create([
            "name" => "richard Manuel",
            "email" => "richard@gmail.com",
            "password" => bcrypt("54321")
        ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Post::create([
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, autem.",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptate dolorem, ipsam placeat iure quaerat rem quod totam, laboriosam error beatae. Neque rerum dolores consectetur magnam distinctio totam esse libero et nemo sapiente. Nostrum officia architecto ratione sapiente quia ex quibusdam debitis repellat accusamus, nihil, obcaecati eaque animi ad mollitia.",
            "category_id" => 1,
            "user_id" => 1
        ]);

        Post::create([
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, autem.",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptate dolorem, ipsam placeat iure quaerat rem quod totam, laboriosam error beatae. Neque rerum dolores consectetur magnam distinctio totam esse libero et nemo sapiente. Nostrum officia architecto ratione sapiente quia ex quibusdam debitis repellat accusamus, nihil, obcaecati eaque animi ad mollitia.",
            "category_id" => 1,
            "user_id" => 1
        ]);
        Post::create([
            "title" => "Judul Ketiga",
            "slug" => "judul-ketiga",
            "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, autem.",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptate dolorem, ipsam placeat iure quaerat rem quod totam, laboriosam error beatae. Neque rerum dolores consectetur magnam distinctio totam esse libero et nemo sapiente. Nostrum officia architecto ratione sapiente quia ex quibusdam debitis repellat accusamus, nihil, obcaecati eaque animi ad mollitia.",
            "category_id" => 2,
            "user_id" => 2
        ]);

        

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
