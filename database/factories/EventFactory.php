<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at' => now(),
            'updated_at' => $this->faker->dateTimeBetween('now', '+1 years'),
            'title' => $this->faker->paragraphs(1, true),
            'destination' => $this->faker->city(),
            'ev_date' => $this->faker->dateTimeThisYear(),
            'centre_fk' => $this->faker->randomElement(['buddha_haus', 's_kolk', 'beat_brg'])
        ];
    }
}
