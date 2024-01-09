<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([[
            'name' => '8th-10th',
            'slug' => '8th-10th',
            'description' => NULL,
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'name' => '10th-12th',
            'slug' => '10th-12th',
            'description' => NULL,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'College Graduate',
            'slug' => 'college-graduate',
            'description' => NULL,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Working',
            'slug' => 'working',
            'description' => NULL,
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
}
