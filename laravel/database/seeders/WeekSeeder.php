<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $queryInsert='insert into weeks values (null,?,?,?,?,?,?,?,?,?);';
        // for ($i=0; $i < 10; $i++) { 
        //     DB::insert($queryInsert,["2","1","2021/06/05","2021/07/05","1","status",null,null,null]);
        // }

        for($i = 0; $i < 10; $i++){
            DB::table('weeks')->insert([
                'week_weekdays' => 2,
                'status_check' => 1,
                'start_date' => "2021/06/05",
                'end_date' => "2021/07/05",
                'diary_id' => 1,
            ]);

        }
    }
}
