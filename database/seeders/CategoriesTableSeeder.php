<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Kebab in tortilla'],
            ['name' => 'Kebab pita'],
            ['name' => 'Kebab in a bun'],
            ['name' => 'Kebab in a cup'],
            ['name' => 'Vegetarian dishes'],
            ['name' => 'Extras'],
            ['name' => 'Non-alcoholic drinks'],
        ]);
    }
}
