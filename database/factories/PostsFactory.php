<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'title'=>$this->faker->sentence(),   
           'catagory'=>$this->faker->word(),    
           'subcatagory'=>$this->faker->word(), 
           'tags'=>$this->faker->word()  ,  
           'content'=>$this->faker->paragraph() ,    
           'image'=>$this->faker->imageUrl(640, 480, 'animals', true) ,  
           'authorid'=>'1'
        ];
    }
}
