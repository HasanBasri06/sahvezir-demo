<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
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

        Category::create(["name" => "Teknoloji", "slug" => "teknoloji","icon"=>"fas fa-regular fa-user"]);
        Category::create(["name" => "Oyun", "slug" => "oyun","icon"=>"<i class='fas fa-regular fa-user"]);
        Category::create(["name" => "Yazılım", "slug" => "yazilim","icon"=>"<i class='fas fa-regular fa-user"]);
        Category::create(["name" => "Bilim / Uzay", "slug" => "bilim-uzay","icon"=>"fas fa-regular fa-user"]);
        Category::create(["name" => "Donanım", "slug" => "donanim","icon"=>"fas fa-regular fa-user"]);
        Category::create(["name" => "Sosyal Medya", "slug" => "sosyal-medya","icon"=>"fas fa-regular fa-user"]);
        Category::create(["name" => "Gündem", "slug" => "gundem","icon"=>"fas fa-regular fa-user"]);


        Post::factory(50)->create();        
        Comment::factory(5)->create();        


    }
}
