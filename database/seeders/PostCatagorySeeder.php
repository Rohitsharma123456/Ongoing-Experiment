<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCatagory;

class PostCatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostCatagory::factory()->count(10)->create();
    }
}
