<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'break_start' => '15:00:00',
            'break_end' => '15:15:00'
        ];    		
        DB::table('rests')->insert($param);
        
        $param = [
            'break_start' => '15:00:00',
            'break_end' => '15:15:00'
        ];    		
        DB::table('rests')->insert($param);
    }
}
