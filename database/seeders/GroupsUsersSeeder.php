<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups_users = [
            [
            'groups_id'=>1,
            'user_id'=>3
            ],
            [
            'groups_id'=>2,
            'user_id'=>5
            ]
            ];

        foreach ($groups_users as $g) {

            DB::table('groups_users')->insert($g);
        }
    }
}
