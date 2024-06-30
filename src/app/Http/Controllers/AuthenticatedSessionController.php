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
