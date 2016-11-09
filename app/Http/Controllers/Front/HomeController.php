<?php

namespace App\Http\Controllers\Front;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::limit(5)->offset(0)->get();
        return view('global.home')->with(array(
            'blogs' =>  $blogs
        ));
    }
}