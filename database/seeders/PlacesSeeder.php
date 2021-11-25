<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Places')->insert([
            ['description'=>'Besplatan parking'],
            ['description'=>'Prilagodjeno za invalide'],
            ['description'=>'Pet friendly'],
            ['description'=>'Javni prevoz u blizini']

        ]);
  
        }
    }
