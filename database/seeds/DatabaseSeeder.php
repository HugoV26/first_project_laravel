<?php

use Database\Seeders\AdminUserTableSeeder;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\PostImageTableSeeder;
use Database\Seeders\PostTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(PostImageTableSeeder::class);

    }
}
