<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create(){
        $categories = Category::get();
        return view('blogs.create', compact('categories'));
    }
    public function store(Request $request){
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'blog.image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/blog', $imageName);
        }
        $store = Blog::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'author_id' => auth()->user()->id,
            'content' => $request->content,
            'image' => $imageName,
            'status' => 1,
        ]);

        if(!empty($store->id)){
            return redirect()->route('blogs.create')->with('success','Blog Created');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }   
}
