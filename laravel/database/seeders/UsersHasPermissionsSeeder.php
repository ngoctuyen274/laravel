<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersHasPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 10; $i++){
            DB::table('users_has_permissions')->insert(
                [
                    "user_id" => 1,
                    "permission_id" => ($i + 1)
                ]
            );
        }
    }

}
