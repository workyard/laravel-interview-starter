<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::create([
            'id' => 1,
            'description' => 'Carpentry',
            'priority' => 4,
        ]);

        Profession::create([
            'id' => 2,
            'description' => 'Electrical',
            'priority' => 3,
        ]);

        Profession::create([
            'id' => 3,
            'description' => 'Drywall',
            'priority' => 9,
        ]);
    }
}
