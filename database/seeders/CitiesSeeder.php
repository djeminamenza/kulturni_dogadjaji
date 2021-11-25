<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Cities')->insert([
            ['name'=>'Nis'],
            ['name'=>'Beograd'],
            ['name'=>'Novi Sad'],
            ['name'=>'Zajecar']

        ]);
  
        }
    }