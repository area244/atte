<?php

namespace App\Http\Controllers;
use App\Models\Work;
use App\Models\Rest;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
