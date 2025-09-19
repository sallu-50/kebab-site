<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            ['name' => 'Location A', 'address' => 'Address A'],
            ['name' => 'Location B', 'address' => 'Address B'],
            ['name' => 'Location C', 'address' => 'Address C'],
            ['name' => 'Location D', 'address' => 'Address D'],
        ]);
    }
}
