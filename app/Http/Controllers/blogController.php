<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::get();
        return view('blogs.index' , compact('blogs'));
    }
    public function create(){
        $categories = Category::get();
        return view('blogs.create' , compact('categories'));
    }
    public function store(Request $request){
        $request->validate([
            'category' => 'required|max:191|unique:blogs,category',
            'title' => 'required|max:191:blogs,title', 
            'short_discription' => 'required|max:8000:blogs,short_discription'                
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'blog' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/blog/', $imageName);
        }
        $store = Blog::create([
            'category' => $request->category,
            'title' => $request->title,
            'author' => auth()->user()->name,
            'short_discription' => $request->short_discription,
            'image' => $imageName,
        ]);
        if(!empty($store->id)){
            return redirect()->route('blogs.index')->with('Success' , 'Blog Add');
        }
        else{
            return redirect()->route('blogs.create')->with('Error' , 'something went wrong');
        }
    }
    public function edit($id){
        $blog = Blog::where('id',$id)->first();
        $categories = Category::get();
        return view('blogs.edit',compact('blog','categories'));
    }
    public function update(Request $request, $id){
        $request->validate([ 
        'category' => 'required|:blogs,category,'.$id,
        'title' => 'required|:blogs,title,'.$id,
        'image' => 'unique|:blogs,image,'.$id,
        'short_discription' => 'required|:blogs,short_discription,'.$id,
    ]);
    $imageData = image::where('id',$id)->first();
    if($request->file('blog')){
        $image = $request->file('blog');
        $imageName = 'blog' . '-' . time() . '.' . $image->getClientOriginalExtension();
        $image->move('upload/blog/', $imageName);
    }
    else{
        $imageName = $imageData->blog;
    }
    $update = blog::where('id',$id)->update([
        'category' => $request->category,
        'title' => $request->title,
        'author' => auth()->user()->id,
        'short_discription' => $request->short_discription,
        'image' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('blogs.index')->with('success','Blog update');
    }
    return redirect()->route('blogs.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $blogs = Blog::where('id',$id)->first();
        if(!empty($blogs)){
         $blogs->delete();
         return redirect()->route('blogs.index')->with('success','Blog delete');
        }
        return redirect()->route('blogs.index')->with('error','record not found');
     }
}