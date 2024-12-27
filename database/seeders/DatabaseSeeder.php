<?php

namespace Database\Seeders;

use App\Models\Centre;
use App\Models\Event;
use App\Models\Transfer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate tables
        DB::table('transfers')->truncate();
        DB::table('events')->truncate();
        DB::table('centre')->truncate();
        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(CentreSeeder::class);
        User::factory(10)->create();
        Event::factory(20)->create()->each(function($event) {
          $curEvId = $event->id;
          $curIdentifier = $$event->centre_fk;

          Transfer::facto

        });
       


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
