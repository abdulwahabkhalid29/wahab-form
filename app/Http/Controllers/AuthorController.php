<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(){
        $users = User::where('role_id',3)->get();
        return view('authors.index' , compact('users'));
    }
}
