<?php

namespace Database\Seeders;
use Database\Seeders\PostSubCatagorySeeder;
use Database\Seeders\PostsSeeder;
use Database\Seeders\PostCatagorySeeder;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
        PostSubCatagorySeeder::class,
        PostsSeeder::class,
        PostCatagorySeeder::class
        
    ]);
    }
}
