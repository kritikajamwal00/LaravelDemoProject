<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class StateDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => 'Uttar Pradesh', 'country_id' => '1'],
            ['name' => 'Uttar Pradesh', 'country_id' => '1'],
            ['name' => 'Uttar Pradesh', 'country_id' => '1'],
            ['name' => 'Uttar Pradesh', 'country_id' => '1'],

            ['name' => 'London', 'country_id' => '2'],
            ['name' => 'Birmingham', 'country_id' => '2'],
            ['name' => 'Bristol', 'country_id' => '2'],
            ['name' => 'Edinburgh', 'country_id' => '2'],

            ['name' => 'New York', 'country_id' => '3'],
            ['name' => 'Los Angeles', 'country_id' => '3'],
            ['name' => 'Chicago', 'country_id' => '3'],
            ['name' => 'Houston', 'country_id' => '3'],

            ['name' => 'Shanghai', 'country_id' => '4'],
            ['name' => 'Shenzhen', 'country_id' => '4'],
            ['name' => ' Tianjin', 'country_id' => '4'],
            ['name' => 'Hangzhou', 'country_id' => '4'],
            // Add more countries here as needed
        ];
        DB::table('states')->insert($states);

    }
}



