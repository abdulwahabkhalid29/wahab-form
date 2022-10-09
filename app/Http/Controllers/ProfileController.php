<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ProfileController extends Controller
{
    public function profile(){
        $user = User::where('id',auth()->user()->id)->first();
        return view('profile.edit' , compact('user'));
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required|:users,name,',
            'about' => 'required|max:255',
            'facebook' => 'required|max:255',
            'google' => 'required|max:255',
            'twitter' => 'required|max:255',
            'linkedin' => 'required|max:255'
        ]);
        $imageData = User::where('id',auth()->user()->id)->first();
        if($request->file('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = 'thumbnail' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/thumbnail/', $imageName);
        }
        else{
            $imageName = $imageData->thumbnail;
        }
        $update = user::where('id',auth()->user()->id)->update([
            'name' => $request->name,
            'about' => $request->about,
            'facebook' => $request->facebook,
            'google' => $request->google,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'thumbnail' => $imageName,
        ]);
        if($update > 0){
            return redirect()->route('profile.edit')->with('success','Profile update');
        }
        return redirect()->route('profile.edit')->with('Error' , 'Something went wrong');
    }
}
