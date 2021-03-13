<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostSubCatagory;

class PostSubCatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PostSubCatagory = PostSubCatagory::factory()->count(10)->create();
    }
}
