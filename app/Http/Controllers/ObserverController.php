<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObserverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('observer');
    }

    public function index()
    {
        return view('users.observer.home');
    }
}
