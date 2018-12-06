<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //$heading = 'My First Laravel App';
        //return view('pages.index')->with('heading', $heading);
        return view('pages.index');
    }

    public function about(){
        //$heading = 'About';
        //return view('pages.about')->with('heading', $heading);
        return view('pages.about');
    }

    public function features(){
        $data = array(
            'heading' => 'Features',
            'para' => ['Trying', 'my', 'hands', 'on', 'Laravel']
        );
        return view('pages.features')->with($data);
    }
}
