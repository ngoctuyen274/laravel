<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 1000000; $i++) { 
            DB::table('trainers')->insert([
                'trainer_name'  => 'ABC',
                'company_id'  => '1',
                'trainer_email'  => 'ABC',
                'trainer_phone'  => '0123456789',
            ]);
        }
    }
}
