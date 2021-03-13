<?php

namespace Database\Factories;

use App\Models\PostCatagory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCatagoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostCatagory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'catagory'=>$this->faker->word(),    
            'image'=>$this->faker->imageUrl(),
        ];
    }
}
