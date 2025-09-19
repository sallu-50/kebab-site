<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationMenuItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('location_menu_item')->insert([
            // Location A
            ['location_id' => 1, 'menu_item_id' => 1, 'price' => 21.00],
            ['location_id' => 1, 'menu_item_id' => 2, 'price' => 25.00],
            ['location_id' => 1, 'menu_item_id' => 3, 'price' => 20.00],
            ['location_id' => 1, 'menu_item_id' => 4, 'price' => 25.00],
            ['location_id' => 1, 'menu_item_id' => 5, 'price' => 18.00],

            // Location B
            ['location_id' => 2, 'menu_item_id' => 1, 'price' => 22.00],
            ['location_id' => 2, 'menu_item_id' => 2, 'price' => 26.00],
            ['location_id' => 2, 'menu_item_id' => 3, 'price' => 21.00],
            ['location_id' => 2, 'menu_item_id' => 4, 'price' => 26.00],
            ['location_id' => 2, 'menu_item_id' => 5, 'price' => 19.00],

            // Location C
            ['location_id' => 3, 'menu_item_id' => 1, 'price' => 20.00],
            ['location_id' => 3, 'menu_item_id' => 2, 'price' => 24.00],
            ['location_id' => 3, 'menu_item_id' => 3, 'price' => 19.00],
            ['location_id' => 3, 'menu_item_id' => 4, 'price' => 24.00],
            ['location_id' => 3, 'menu_item_id' => 5, 'price' => 17.00],

            // Location D
            ['location_id' => 4, 'menu_item_id' => 1, 'price' => 23.00],
            ['location_id' => 4, 'menu_item_id' => 2, 'price' => 27.00],
            ['location_id' => 4, 'menu_item_id' => 3, 'price' => 22.00],
            ['location_id' => 4, 'menu_item_id' => 4, 'price' => 27.00],
            ['location_id' => 4, 'menu_item_id' => 5, 'price' => 20.00],
        ]);
    }
}
