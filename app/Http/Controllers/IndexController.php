<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;


class IndexController extends Controller
{
    public function index(){
        $popularPosts = Blog::orderBy('views','DESC')->take(4)->get();
        $blogs = Blog::where('status', 1)->paginate(5);
        $categories  = Category::where('status',1)->orderBy('name','ASC')->get();
        return view('web.pages.index' , compact('blogs','categories','popularPosts'));
    }
    public function details($id){
        $blog = Blog::where('id',$id)->firstOrFail();
        $alsoLike = Blog::where('category_id', $blog->category_id)->take(3)->orderBy('id','DESC')->get();
        $categories  = Category::where('status',1)->orderBy('name','ASC')->get();
        $popularPosts = Blog::orderBy('views','DESC')->take(4)->get();

        //Views Count
        $oldViews = $blog->views;
        $newViews = $oldViews + 1;

        //Updating Views to Blog table
        $views  = Blog::where('id',$id)->update(['views' => $newViews]);

        return view('web.pages.details' , compact('blog','alsoLike','categories','popularPosts'));
    }
    public function categoryWise($id){
        $blog = Category::where('id',$id)->firstOrFail();
        $blogs  = Blog::where('category_id',$id)->paginate(9);
        $categories  = Category::where('status',1)->orderBy('name','ASC')->get();
        return view('web.pages.category-wise',compact('blogs','blog','categories'));
    }
    public function authorWise($id){
        $author = User::where('id',$id)->firstOrFail();
        $blogs  = Blog::where('author_id',$id)->paginate(9);
        return view('web.pages.author-wise',compact('blogs','author'));
    }
}
    