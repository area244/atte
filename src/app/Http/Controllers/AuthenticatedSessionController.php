<?php

namespace App\Http\Controllers;
use App\Models\Work;
use App\Models\Rest;
use App\Http\Requests\ContactRequest;

class AuthenticatedSessionController extends Controller
{
    // トップページ 
    public function index()
    {
        return view('index');
    }
    
    // 日付別勤怠ページ
    public function attendance()
    {
        return view('attendance');
    }
}
