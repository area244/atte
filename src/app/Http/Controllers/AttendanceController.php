<?php

namespace App\Http\Controllers;
use App\Models\Work;
use App\Models\Rest;
use App\Http\Requests\ContactRequest;

class AttendanceController extends Controller
{
    // 日付別勤怠ページ
    public function attendance()
    {
        \DB::table('works')->insert([
            'work_start' => '勤務開始'
        ]);
        
        \DB::table('works')->insert([
            'work_end' => '勤務終了'
        ]);

        \DB::table('rests')->insert([
            'break_start' => '休憩開始'
        ]);

        \DB::table('rests')->insert([
            'break_end' => '休憩終了'
        ]);
        
        return view('attendance');
    }
}
