<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserNotes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notes>
 * 
 * 
 * */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6),
            'about' => fake()->text(200),
            'content' => fake()->paragraph(10),
            'user_id' => UserNotes::query()->inRandomOrder()->first()->id,
        ];
    }
}