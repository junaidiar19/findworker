<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Worker;
use App\Models\Service;
use App\Models\Provinsi;
use App\Models\Experience;
use App\Models\Availability;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileSetupController extends Controller
{
    public function setup()
    {
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

        return view('user.profile.setup.worker_profile', $var);
    }

    public function store_profile(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,id,' . auth()->id(),
            'name' => 'required',
            'expertise' => 'required',
            'phone' => 'required|unique:users,id,' . auth()->id(),
            'provinsi' => 'required',
            'kota' => 'required',
            'about' => 'required',
        ]);

        $user = [
            'username' => $request->username,
            'name' => $request->name,
            'role' => 'worker'
        ];

        $worker = [
            'expertise' => $request->expertise,
            'portofolio_link' => $request->portofolio_link,
            'phone' => $request->phone,
            'provinsi_id' => $request->provinsi,
            'kota_id' => $request->kota,
            'about' => $request->about,
            'user_id' => auth()->id(),
        ];

        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => 'mimes:png,jpg,jpeg', 'max:5012'
            ]);
            
            $path = $request->file('avatar')->store('avatar');
            $img = Image::make("storage/" . $path);
            $img->resize(700, null, function ($constraint) {
              $constraint->aspectRatio();
            });
            $img->save();
            $user['avatar'] = $path;
        }

        // dd($user);
        auth()->user()->update($user);
        Worker::firstOrCreate(['user_id' => auth()->id()], $worker);

        return redirect(route('user.setup.worker.additional'));
    }

    public function setup_worker_additional()
    {
        if(!auth()->user()->worker) {
            return abort(404);
        }
        $experiences = Experience::all();
        $availabilities = Availability::all();
        $services = Service::all();

        $worker = auth()->user()->worker;
        $aval = $worker->availability->pluck('id');

        return view('user.profile.setup.worker_additional', compact('experiences', 'availabilities', 'services', 'aval'));
    }

    public function store_additional(Request $request)
    {
        $attr = request()->except(['_token', 'available']);
        $attr['status'] = 'Pending';

        $request->validate([
            'experience' => 'required',
            'skills' => 'required',
        ]);

        $user = auth()->user();

        // dd($attr);
        $user->worker()->update($attr);
        $user->worker->availability()->sync($request->available);
        return redirect()->route('worker.dashboard');
    }

    public function setup_recruiter()
    {
        return view('user.profile.setup.recruiter');
    }
}
