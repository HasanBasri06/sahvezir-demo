<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create(["name" => "Teknoloji", "slug" => "teknoloji","icon"=>"<i class='fas fa-regular fa-user'></i>"]);
        Category::create(["name" => "Oyun", "slug" => "oyun","icon"=>"<i class='fas fa-regular fa-user'></i>"]);
        Category::create(["name" => "Yazılım", "slug" => "yazilim","icon"=>"<i class='fas fa-regular fa-user'></i>"]);
        Category::create(["name" => "Bilim / Uzay", "slug" => "bilim-uzay","icon"=>"<i class='fas fa-regular fa-user'></i>"]);
        Category::create(["name" => "Donanım", "slug" => "donanim","icon"=>"<i class='fas fa-regular fa-user'></i>"]);
        Category::create(["name" => "Sosyal Medya", "slug" => "sosyal-medya","icon"=>"<i class='fas fa-regular fa-user'></i>"]);
        Category::create(["name" => "Gündem", "slug" => "gundem","icon"=>"<i class='fas fa-regular fa-user'></i>"]);


        Post::factory(50)->create();        


    }
}
