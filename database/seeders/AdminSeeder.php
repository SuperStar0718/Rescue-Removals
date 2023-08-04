<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$3fDfKPnTwdPwKvg3zPwzauZRIXZ2HIdZAXr8oD9818OIG1ohPAfsW',
            'admin'=> true
        ]);
    }
}
