<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement([
                'The Importance of Learning Programming',
                'How to Start Learning Laravel',
                'Best Ways to Learn Web Development',
                'Introduction to PHP',
                'How to Become a Professional Developer',
                'The Importance of Databases in Programming',
            ]),

            'body' => fake()->randomElement([
                'Programming is one of the most important skills in today’s job market.',
                'Laravel is one of the most popular frameworks for building web applications with PHP.',
                'Learning programming requires continuous practice and a good understanding of the basics.',
                'Databases are an essential part of most web applications because they are used to store and manage data.',
            ]),

            'user_id' => '1',
        ];
    }
}
