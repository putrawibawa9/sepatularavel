<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sepatu>
 */
class SepatuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'merk_sepatu' => fake()->word(),
             'merk_sepatu' => fake()->word(),
             'warna_sepatu' => fake()->colorName(),
             'jenis_sepatu' => fake()->word(),
             'bahan_sepatu' => fake()->word(),
             'tgl_launching' => fake()->date(),
        ];
    }
}
