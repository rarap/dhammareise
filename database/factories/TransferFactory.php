<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        $event = DB::table('event')->inRandomOrder()->first();
        $eventId = $event->id;
        $centreFk = $event->centre_fk;

        return [
            'created_at' => now(),
            'updated_at' => $this->faker->dateTimeBetween('now', '+1 years'),
            'event_id' => $eventId,
            'centre_fk' => $centreFk,
            'start' => $this->faker->city(),
            'via' => $this->faker->city(),
            'destination' => $this->faker->city(),
            'email' => $this->faker->firstName(),
            'name' => $this->faker->firstName(),
            'message' => $this->faker->paragraphs(2, true),
            'mode' => $this->faker->randomElement(['offer', 'request'])
        ];
    }
}
