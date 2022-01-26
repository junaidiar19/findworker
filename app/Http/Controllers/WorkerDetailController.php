<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerDetailController extends Controller
{
    public function hire($username)
    {
        $worker = Worker::active($username)->firstOrFail();

        return view('modals.worker-hire', compact('worker'));
    }
    
    public function detail($username)
    {
        $worker = Worker::active($username)->firstOrFail();
        $related = Worker::related($worker)->limit(6)->get();

        return view('worker.worker-detail', compact('worker', 'related'));
    }
}
