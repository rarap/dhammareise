<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfer>
 */
class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $centreFK = Event::pluck('centre_fk')->toArray();

        return [
            'created_at' => now(),
            'updated_at' => $this->faker->dateTimeBetween('now', '+1 years'),
            'event_id' => Event::factory(),
            //'centre_fk' => $this->faker->randomElement(['buddha_haus', 's_kolk', 'beat_brg']),
            //'centre_fk' => $centreFK,
            'start' => $this->faker->city(),
            'via' => $this->faker->city(),
            'destination' => $this->faker->city(),
            'email' => $this->faker->firstName(),
            'name' => $this->faker->firstName(),
            'message' => $this->faker->paragraphs(2, true),
            'centre_fk' => $this->faker->randomElement(['offer', 'request'])
        ];
    }
}
