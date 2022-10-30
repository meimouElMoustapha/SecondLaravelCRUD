<?php

namespace Database\Factories;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Suppor\Str;
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\BlogPost::class;
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->paragraph,
            
        ];
    }
}
