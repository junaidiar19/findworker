<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Worker;
use App\Models\Service;
use App\Models\Provinsi;
use App\Models\Experience;
use App\Models\Availability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProfileRequest;
use App\Http\Traits\UploadAvatarTrait;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileSetupController extends Controller
{

    use UploadAvatarTrait;

    public function setup()
    {
        // if(!auth()->user()->role) {
        //     return redirect()->route('home');
        // }

        return view('user.profile.setup');
    }

    public function setup_worker()
    {
        $var['provinsi'] = Provinsi::all();

        if(auth()->user()->worker) {
            $user_provinsi = auth()->user()->worker->provinsi_id;
            if ($user_provinsi) {
                $var['kota'] = Kota::whereProvinsiId($user_provinsi)->get();
            }
        }

        return view('user.profile.setup.worker-profile', $var);
    }

    public function store_profile(ProfileRequest $request)
    {
        $worker = $request->safe()->merge([
            'user_id' => auth()->id(),
            'portofolio_link' => $request->portofolio_link
        ])->except(['name', 'username']);

        $user = [
            'name' => $request->name,
            'role' => 'worker'
        ];

        if (!auth()->user()->username) {
            $user['username'] = $request->username;
        }

        $user['avatar'] = $this->uploadAvatar($request);

        DB::transaction(function () use ($user, $worker) {
            auth()->user()->update($user);
            Worker::updateOrCreate(['user_id' => auth()->id()], $worker);
        });

        if(@$_GET['ref']) {
            Alert::success('Successfully', 'Your profile has been updated');
            return back();
        } else {
            return redirect(route('user.setup.worker.additional'));
        }
    }

    public function setup_worker_additional()
    {
        if(!auth()->user()->worker) {
            return abort(404);
        }
        
        $var['experiences'] = Experience::all();
        $var['availabilities'] = Availability::all();
        $var['services'] = Service::all();

        $worker = auth()->user()->worker;
        $var['aval'] = $worker->availability->pluck('id');

        return view('user.profile.setup.worker-additional', $var);
    }

    public function store_additional(Request $request)
    {

        if(!auth()->user()->worker) {
            return abort(404);
        }

        $attr = request()->except(['_token', 'available', 'ref']);
        $attr['status'] = 'Pending';

        $request->validate([
            'experience' => 'required',
            'skills' => 'required',
        ]);

        $user = auth()->user();

        // dd($attr);
        $user->worker()->update($attr);
        $user->worker->availability()->sync($request->available);

        if(@$_GET['ref']) {
            Alert::success('Successfully', 'Your information has been updated');
            return back();
        } else {
            return redirect()->route('worker.dashboard');
        }
    }

    public function setup_recruiter()
    {
        return view('user.profile.setup.recruiter');
    }
}
