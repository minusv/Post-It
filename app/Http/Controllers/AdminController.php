<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    //check if user is admin.
    public function __construct()
    {
        $this->middleware('auth');
    }

    //admin can delete/edit every post in the database.
    public function admin()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('admin')->with('posts',$posts);
    }
}
