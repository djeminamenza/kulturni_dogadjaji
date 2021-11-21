<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = [
            ['role'=>'Admin'],
            ['role'=>'Organisation'],
            ['role'=>'User']
        ];

        foreach ($userRole as $key => $value) {

            DB::table('user_role')->insert($value);
        }
    }
}

// execute in Terminal: php artisan db:seed --class=UserRoleSeeder
