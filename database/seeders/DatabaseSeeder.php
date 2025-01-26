<?php

namespace Database\Seeders;

use App\Models\Centre;
use App\Models\Event;
use App\Models\Transfer;
use App\Models\User;
use Database\Factories\TransferFactory;
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
        DB::table('transfer')->truncate();
        DB::table('event')->truncate();
        DB::table('centre')->truncate();
        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(CentreSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(TransferSeeder::class);
        User::factory(10)->create();
    }
}
