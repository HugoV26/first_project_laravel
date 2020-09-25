<?php

namespace Database\Seeders;

use App\Post;
use App\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate(); //Borra todos los datos de la base de datos

        $categories = Category::all();

        foreach ($categories as $key => $c) {
            for($i = 1; $i<=20; $i++){
                Post::create([
                    'title' => "$key $i Post",
                    'url_clean' => "$key-$i-post",
                    'content' => "I love whiskey",
                    'posted' => 'yes',
                    'category_id' => $c->id
                ]);
            }
        }

        
    }
}
