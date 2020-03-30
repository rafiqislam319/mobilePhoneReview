<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    public function profile(){
        return view('admin.user.profile', [
           'user'=>Auth::user()
        ]);
    }
    public function profileImageUpload(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' .$fileName));

            $user = Auth::user();
            $user->avatar = $fileName;
            $user->save();
        }
       return view('admin.user.profile', ['user' => Auth::user()] );


    }
}
