<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TidingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tidings')->insert([
            ['name'=>'Ujedinjeni festivali Srbije apeluju na organizatore',
            'description'=> 'Ujedinjeni festivali Srbije, koje čine EXIT, Arsenal fest, Lovefest, Beerfest, i Nišville,
                            apelovali su danas na sve organizatore muzičkih događaja da strogo poštuju mere nadležnih
                            propisane u cilju suzbijanja epidemije korona virusa.

                            Istakli su da je to jedini način da se spreči širenje zaraze i održi srpska manifestaciona privreda,
                            kao jedna od retkih u svetu koja je pronašla bezbedan način na koji može da se održava.',
            'id_category'=> 1,
            'created_at' => '2021-7-7'

        ]
            ]);

    }
}
