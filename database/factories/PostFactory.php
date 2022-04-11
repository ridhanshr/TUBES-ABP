<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 8)),
            'lokasi' => $this->faker->sentence(mt_rand(2, 8)),
            'deskripsi'=> $this->faker->sentence(mt_rand(50,50)),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
