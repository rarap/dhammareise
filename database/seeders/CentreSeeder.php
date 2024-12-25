<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centres = include database_path('seeders/data/centre_data.php');
        $count = 0;

        foreach ($centres as &$centre) {
            $yesterday = Carbon::yesterday();
            $now = now();
            $count++;
            $now->addHours($count);
            $yesterday->addHours($count);

            $centre['created_at'] = $yesterday;
            $centre['updated_at'] = $now;
        }

        DB::table('centre')->insert($centres);
        echo 'Centres created successfully';
    }
}
