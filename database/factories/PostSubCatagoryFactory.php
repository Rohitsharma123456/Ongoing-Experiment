<?php

namespace Database\Factories;

use App\Models\PostSubCatagory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostSubCatagoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostSubCatagory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'catagory_id'=>$this->faker->randomDigit(2),
            'image'=>$this->faker->imageUrl(640, 480, 'animals', true),
            'subcatagory'=>$this->faker->word()
        ];
    }
}
