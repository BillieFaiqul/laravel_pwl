<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'judul' => fake()->words(mt_rand(1,3), true),
            'penulis' => fake()->name(),
            'tanggal_publish'=> fake()->dateTimeBetween()
        ];
    }
}
