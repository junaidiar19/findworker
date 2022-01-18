<?php

namespace App\Http\Controllers\Worker;

use App\Models\Kota;
use App\Models\Service;
use App\Models\Provinsi;
use App\Models\Experience;
use App\Models\Availability;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit()
    {
        $var['active'] = 'profile';
        $var['provinsi'] = Provinsi::all();
        
        $user_provinsi = auth()->user()->worker->provinsi_id;
        $var['kota'] = Kota::whereProvinsiId($user_provinsi)->get();

        $var['experiences'] = Experience::all();
        $var['availabilities'] = Availability::all();
        $var['services'] = Service::all();

        $worker = auth()->user()->worker;
        $var['aval'] = $worker->availability->pluck('id');
        
        return view('worker.edit-profile', $var);
    }
}
