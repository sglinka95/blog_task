<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;
 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $datetime = $this->faker->dateTime();
        
        return [
            'username' => $this->faker->userName,
            'content' => $this->faker->paragraph(),
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ];
    }
}
