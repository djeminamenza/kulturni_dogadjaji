<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert([
            ['description'=>'Koncerti'],
            ['description'=>'Projekcije'],
            ['description'=>'Izlozbe'],
            ['description'=>'Instalacije'],
            ['description'=>'Predstave'],
            ['description'=>'Simpozijumi']

        ]);
  
        }
    }
