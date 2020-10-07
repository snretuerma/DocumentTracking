<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GOController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('go');
    }

    public function index()
    {
        return view('users.go.home');
    }
}
