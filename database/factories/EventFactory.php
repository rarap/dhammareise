<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        $centre = DB::table('centre')->inRandomOrder()->first();
        $centreFk = $centre->identifier;
        $centreDest = $centre->city;

        return [
            'created_at' => now(),
            'updated_at' => fake()->dateTimeBetween('now', '+1 years'),
            'title' => fake()->paragraphs(1, true),
            'destination' => $centreDest,
            'ev_date' => fake()->dateTimeThisYear(),
            'centre_fk' => $centreFk,
        ];
    }
}
