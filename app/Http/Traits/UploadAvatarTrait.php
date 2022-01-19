<?php 

namespace App\Http\Traits;

use Intervention\Image\Facades\Image;

trait UploadAvatarTrait
{
    public function uploadAvatar($request)
    {
        $avatar = auth()->user()->avatar;
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
            $avatar = $path;
        }
        return $avatar;
    }
}