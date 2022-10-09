<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;



class IndexController extends Controller
{
    public function index(){
        $blogs = Blog::where('status', 1)->get();
        return view('web.pages.index' , compact('blogs'));
    }

    public function details($id){
        $user = User::where('id',auth()->user()->id)->first();
        $blog = Blog::where('id',$id)->first();
        return view('web.pages.details',compact('blog','user'));
    }
}
