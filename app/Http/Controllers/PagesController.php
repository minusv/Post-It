<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //redirect all the request to '/' route to '/posts'
    //no need of '/' route
    public function index(){
        return redirect('/posts');
    }
    
    public function about(){
        return view('pages.about');
    }

}
