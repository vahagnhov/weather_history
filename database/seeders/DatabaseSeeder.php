<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // HistoryTableSeeder seeder will create random float values with daily forecasts for the last 6 months.
        $this->call(HistoryTableSeeder::class);
    }
}
