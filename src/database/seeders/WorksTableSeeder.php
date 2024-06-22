<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'work_date' => '2024-06-24',
            'work_start' => '9:00:00',
            'work_end' => '17:00:00'
        ];    		
        DB::table('works')->insert($param);
        
        $param = [
            'work_date' => '2024-06-25',
            'work_start' => '9:00:00',
            'work_end' => '17:00:00'
        ];    		
        DB::table('works')->insert($param);
    }
}
