<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role_id == 1){
            return view('admin.dashboard');
        }
        elseif(auth()->user()->role_id == 2){
        $blogs = Blog::where('status', 1)->get();
            return view('web.pages.index' , compact('blogs'));
        }
        elseif(auth()->user()->role_id == 3){
            return view('author.dashboard');
        }
    }
}
