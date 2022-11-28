<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory()->create()->id,
            'title' => rtrim(fake()->sentence(rand(5,10)), "."),
            'body'=>fake()->paragraph(rand(3,7), true),
            'views'=>rand(0, 10),
            'answers'=>rand(0, 10),
            'votes'=>rand(0, 10),
        ];
    }
}
