<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $var['active'] = 'dashboard';
        $worker = auth()->user()->worker;

        return view('worker.dashboard', $var, compact('worker'));
    }
}
