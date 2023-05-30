<?php

namespace Database\Seeders;

use App\Models\ReadingTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReadingTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReadingTime::create([
            'name' => 'Quick Reads'
        ]);

        ReadingTime::create([
            'name' => 'Medium Reads'
        ]);

        ReadingTime::create([
            'name' => 'Long Reads'
        ]);
    }
}
