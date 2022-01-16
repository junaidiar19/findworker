<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Provinsi;
use App\Models\Experience;
use App\Models\Availability;
use App\Models\Worker;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileSetupController extends Controller
{
    public function setup()
    {
        return view('user.profile.setup');
    }

    public function setup_worker()
    {
        $provinsi = Provinsi::all();
        return view('user.profile.setup.worker_profile', compact('provinsi'));
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
        $experiences = Experience::all();
        $availabilities = Availability::all();
        $services = Service::all();

        return view('user.profile.setup.worker_additional', compact('experiences', 'availabilities', 'services'));
    }

    public function setup_recruiter()
    {
        return view('user.profile.setup.recruiter');
    }
}
