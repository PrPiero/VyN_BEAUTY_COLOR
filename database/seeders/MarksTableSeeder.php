<?php

namespace Database\Seeders;

use App\Models\Mark;
use Illuminate\Database\Seeder;

class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mark::truncate();

        $mark = new Mark;
        $mark->mark ="Daviness";
        $mark->save();

        $mark = new Mark;
        $mark->mark ="L'Oreal";
        $mark->save();
    }
}
