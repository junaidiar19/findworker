<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerWaitController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $workers = Worker::orderBy('actived_at')->get();

        if (@$_GET['approve']) {
            $worker = Worker::findOrFail($_GET['id']);
            $worker->update(['status' => 'Active', 'actived_at' => now()]);
            return back();
        }
        return view('worker-wait', compact('workers'));
    }
}
