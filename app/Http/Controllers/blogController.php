<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::get();
        return view('blogs.index' , compact('blogs'));
    }
    public function create(){
        return view('blogs.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:blogs,name',
            'status' => 'required',
        ]);
        $store = Blog::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        if(!empty($store->id)){
            return redirect()->route('blogs.index')->with('success','Blog Added');
        }
        else{
            return redirect()->route('blogs.create')->with('error','Something Went Wrong');
        }

    }
    public function edit($id){
        $blog = Blog::where('id',$id)->first();
        return view('blogs.edit',compact('blog'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|:blogs,name'.$id,
        'status' => 'required',
    ]);
    $update = Blog::where('id',$id)->update([
        'name' => $request->name,
        'status' => $request->status,
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
