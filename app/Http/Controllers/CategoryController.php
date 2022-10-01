<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function category(){
        $categories = category::get();
        return view('categories.category' , compact('categories'));
    }
 
    public function create(){
        $users = User::where('role_id',3)->get();
        $categories = category::get();
        return view('categories.create' , compact('users', 'categories'));
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:categories,name',
            'status' => 'required',
        ]);
        $store = Category::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        if(!empty($store->id)){
            return redirect()->route('categories.category')->with('success','Category Added');
        }
        else{
            return redirect()->route('categories.create')->with('error','Something Went Wrong');
        }

        

    }
    public function edit($id){
        $users = User::where('role_id',3)->get();
        $category = Category::where('id',$id)->first();
        return view('categories.edit',compact('category' , 'users'));
    }
    

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|:categories,name'.$id,
        'status' => 'required',
    ]);
    $update = Category::where('id',$id)->update([
        'name' => $request->name,
        'status' => $request->status,
    ]);
    if($update > 0){
        return redirect()->route('categories.category')->with('success','category update');
    }
    return redirect()->route('categories.category')->with('error','something went wrong');  
    }
    public function delete($id){
        $categories = Category::where('id',$id)->first();
        if(!empty($categories)){
         $categories->delete();
         return redirect()->route('categories.category')->with('success','Category delete');
        }
        return redirect()->route('categories.category')->with('error','record not found');
     }
}
