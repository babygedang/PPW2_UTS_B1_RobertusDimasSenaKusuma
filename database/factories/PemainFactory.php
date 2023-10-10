<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_pemain' => $this->faker->word(),
            'nomor_punggung' => $this->faker->numberBetween(1, 100),
            'posisi' => $this->$this->faker->word(),

        ];
    }
}