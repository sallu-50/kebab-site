<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_items')->insert([
            // Kebab in tortilla
            [
                'category_id' => 1,
                'name' => 'Tortilla',
                'description' => 'wołowina, mix sałat, sos',
                'image' => 'images/gallery1.jpg',
            ],
            [
                'category_id' => 1,
                'name' => 'Tortilla with cheese',
                'description' => 'wołowina, ser, mix sałat, sos',
                'image' => 'images/gallery1.jpg',
            ],

            // Kebab pita
            [
                'category_id' => 2,
                'name' => 'Pita',
                'description' => 'wołowina, mix sałat, sos',
                'image' => 'images/gallery2.jpg',
            ],

            // Kebab in a bun
            [
                'category_id' => 3,
                'name' => 'Bun',
                'description' => 'wołowina, mix sałat, sos',
                'image' => 'images/gallery3.jpg',
            ],

            // Vegetarian dishes
            [
                'category_id' => 5,
                'name' => 'Falafel in tortilla',
                'description' => 'falafel, sałatki, sos',
                'image' => 'images/gallery4.jpg',
            ],
        ]);
    }
}
