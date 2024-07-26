<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    // 日付別勤怠ページ
    public function attendance()
    {
        return view('attendance');
    }

    public function breakStart()
    {
        \DB::table('rests')->insert([
            'work_id' => 1,
            'break_start' => '15:00',
            'break_end' => '15:10'
        ]);

        return view('index');
    }

    public function breakEnd()
    {
        /*\DB::table('rests')->update([
            'work_id' => 1,
            'break_start' => '15:00',
            'break_end' => '15:10'
        ]);*/

        return view('index');
    }
}
