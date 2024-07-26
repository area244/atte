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

    public function workStart()
    {
        \DB::table('works')->insert([
            'user_id' => 1,
            'work_date' => '2024/07/14',
            'work_start' => '09:00',
            'work_end' => '17:00'
        ]);

        return view('index');
    }

    public function workEnd()
    {
        /*\DB::table('works')->update([
            'user_id' => 1,
            'work_date' => '2024/07/14',
            'work_start' => '09:00',
            'work_end' => '17:00'
        ]);*/

        return view('index');
    }
}
