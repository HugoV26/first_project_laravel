<?php

namespace Database\Seeders;

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate(); //Borra todos los datos de la base de datos

        for($i = 1; $i<=20; $i++){
            Category::create([
                'title' => "$i Category",
                'url_clean' => "$i-category",
            ]);
        }

        // Category::create([
        //     'title' => 'First Category',
        //     'url_clean' => 'first_category',
        // ]);
    }
}
