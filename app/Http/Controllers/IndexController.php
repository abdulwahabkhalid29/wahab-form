<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class IndexController extends Controller
{
    public function index(){
        $blogs = Blog::where('status', 1)->get();
        return view('web.pages.index' , compact('blogs'));
    }
}
