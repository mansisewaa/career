<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounsellingForSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('couselling_fors')->insert([
            ['category_id' => '2',
              'name' => 'Interests and Passions'
        ],
            ['category_id' => '2',
            'name' => 'Skills and Strengths'
        ]
        ]);
    }
}
