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
        /*$authors = Work::all();
        return view('index', ['works' => $works]);*/
        /*$authors = Rest::all();
        return view('index', ['rests' => $rests]);*/
    }
    
    // 日付別勤怠ページ
    public function attendance(ContactRequest $request)
    {
        $contact = $request->only(['work_id','work_date', 'work_start', 'work_end']);
        return view('attendance', compact('contact'));
    }
    
    // ログインページ：GET
    public function sotre(ContactRequest $request)
    {
        $contact = $request->only(['work_date', 'work_start', 'work_end']);
        Work::create($contact);
    }

    // ログインページ：POST
    public function destroy(ContactRequest $request)
    {
        return view('login');
    }
}
