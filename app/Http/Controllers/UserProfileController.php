<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function edit(){
        return view('web.pages.user-profile');
    }

    public function update(Request $request){
        $user = User::where('id',auth()->user()->id)->first();
        if($request->file('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = 'profile' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/profile/', $imageName);
        }
        else{
            $imageName =  $user->thumbnail;
        }

        $update = User::where('id',auth()->user()->id)->update([
            'name' => $request->name,
            'about' => $request->about,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'google' => $request->google,
            'linkedin' => $request->linkedin,
            'thumbnail' => $imageName,
        ]);

        if($update  >  0){
            return redirect()->back()->with('success','Profile Updated');
        }
        else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
}
