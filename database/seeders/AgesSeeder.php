<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgesSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Ages')->insert([
            ['ages'=>'Svi uzrasti'],
            ['ages'=>'Deca'],
            ['ages'=>'Tinejdzeri'],
            ['ages'=>'Odrasli']

        ]);
  
        }
    }

