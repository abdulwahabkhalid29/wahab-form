<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ReaderController extends Controller
{
    public function index(){
        $users = User::where('role_id',2)->get();
        return view('reader.index' , compact('users'));
    }
}
