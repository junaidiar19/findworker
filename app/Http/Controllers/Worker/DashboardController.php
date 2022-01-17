<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $worker = auth()->user()->worker;
        return view('user.dashboard.worker', compact('worker'));
    }
}
