<?php

use Illuminate\Database\Seeder;
use App\Week;

class WeeksSeeder extends Seeder
{
    public function run()
    {
        $weeksArray = [
            [
            'week' => 'Pre-work Week 1',
            ],
            [
            'week' => 'Pre-work Week 1',
            ],
            [
            'week' => 'Pre-work Week 1',
            ]
         ];
        foreach($weeksArray as &$Week) {
            Week::create($Week);
        }
    }
}
