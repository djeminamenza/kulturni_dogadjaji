<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Events')->insert([
            ['name'=>'Nisville',
            'starting_date'=>'2022-08-12',
            'ending_date'=>'2022-08-15',
            'id_city'=> 1,
            'id_category'=> 1,
            'id_years'=> 1,
            'id_place'=> 1

        ],
        ['name'=>'Gitarijada',
        'starting_date'=>'2022-09-17',
        'ending_date'=>'2022-09-18',
        'id_city'=> 4,
        'id_category'=> 1,
        'id_years'=> 1,
        'id_place'=> 4

    ],
        ]);
  
        }
    }
