<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chandelier>
 */
class ChandelierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public $color = [
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'indigo',
        'violet',
    ];

    public $country = [
        'Russia',
        'Italy',
        'German',
        'China'
    ];



    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'color' => $this->color[array_rand($this->color)],
            'country' => $this->country[array_rand($this->country)],
            'price' => fake()->numberBetween(899, 120000),
        ];
    }
}
