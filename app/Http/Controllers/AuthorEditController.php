<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthorEditController extends Controller
{
    public function edit($id){
        $users = User::where('id',$id)->first();
        return view('authoredit.edit',compact('users'));
    }
    public function update(Request $request, $id){
        $request->validate([ 
            'name' => 'required',
            'about' => 'required|max:8000',
            'facebook' => 'required',
            'google' => 'required',
            'twitter' => 'required',
            'linkin' => 'required',
    ]);
    if($request->file('image')){
        $image = $request->file('image');
        $imageName = 'blog' . '-' . time() . '.' . $image->getClientOriginalExtension();
        $image->move('upload/blog/', $imageName);
    }
    $update = User::where('id',$id)->update([
        'name' => $request->name,
        'about' => $request->about,
        'facebook' => $request->facebook,
        'google' => $request->google,
        'twitter' => $request->twitter,
        'linkin' => $request->linkin,
        
    ]);
    if($update > 0){
        return redirect()->route('authoredit.edit')->with('success','Blog update');
    }
    return redirect()->route('authoredit.edit')->with('error','something went wrong');  
    }
}
