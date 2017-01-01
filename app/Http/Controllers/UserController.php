<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    public function updateAvatar(Request $request)
    {

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('user.profile', ['user' => Auth::user()]);
    }

    /**
     * BCG van de User
     */
    public function profilebcg()
    {
        return view('user.profilebcg', ['user' => Auth::user()]);
    }

    public function updateBackground(Request $request){

        if($request->hasFile('bcg')){
            $bcg = $request->file('bcg');
            $bcgname = time() . '.' . $bcg->getClientOriginalExtension();
            Image::make($bcg)->save(public_path('uploads/bcg/' . $bcgname));

            $user = Auth::user();
            $user->bcg = $bcgname;
            $user->save();
        }

        return view('user.profilebcg', ['user' => Auth::user()]);
    }
}
