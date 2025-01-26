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
        $centreDest = $event->destination;

        //dd($this->faker);

        return [
            'created_at' => now(),
            'updated_at' => fake()->dateTimeBetween('now', '+1 years'),
            'event_id' => $eventId,
            'centre_fk' => $centreFk,
            'start' => fake()->city(),
            'via' => fake()->city(),
            'destination' => $centreDest,
            'email' => fake()->firstName(),
            'name' => fake()->firstName(),
            'message' => fake()->paragraphs(2, true),
            'mode' => fake()->randomElement(['offer', 'request'])
        ];
    }
}
