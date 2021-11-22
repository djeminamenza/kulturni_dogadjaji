<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            ['role'=>'Admin'],
            ['role'=>'Organisation'],
            ['role'=>'User']
        ];

        foreach ($groups as $key => $value) {

            DB::table('Groups')->insert($value);
        }
    }
}

// execute in Terminal: php artisan db:seed --class=GroupsSeeder
