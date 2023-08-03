<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CountryDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'India'],
            ['name' => 'UK'],
            ['name' => 'US'],
            ['name' => 'China'],
            // Add more countries here as needed
        ];

        DB::table('countries')->insert($countries);
    }
}


