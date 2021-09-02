<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        return view('website.home');
    }
    public function about(){
        return view('website.about');
    }
    public function category(){
        return view('website.category');
    }
    public function contact(){
        return view('website.contact');
    }
    public function post(){
        return view('website.post');
    }

}
