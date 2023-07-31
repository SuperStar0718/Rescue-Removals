<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VanType;

class VanType_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // insert dummy records
         VanType::create([
            'name' => 'Luton',
            'image' => 'images/luton.png'
        ]);
         VanType::create([
            'name' => 'Long Wheel Based',
            'image' => 'images/long_wheel_based.png'
        ]);
         VanType::create([
            'name' => 'Medium Wheel Based',
            'image' => 'images/medium_wheel_based.png'
        ]);
    }
}
