<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;
use DB;

class HistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        History::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $now = \Carbon\Carbon::now()->format('Y-m-d');
        $sixMonth = \Carbon\Carbon::now()->subMonth(6)->format('Y-m-d');
        $dateDiff = strtotime($now) - strtotime($sixMonth);
        $countDays = abs(round($dateDiff / (60 * 60 * 24)));

        \App\Models\History::factory($countDays)->create();
    }
}
