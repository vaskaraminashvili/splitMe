<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'status' => rand(0, 1),
            'user_id' => rand(0, 50)
        ];
    }
}
