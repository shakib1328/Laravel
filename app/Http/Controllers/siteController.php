<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function Home(){
        return view('welcome',['name'=>'our site']);
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact',['con'=>'Contact us ']);
    }

}
