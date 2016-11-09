<?php

namespace App\Http\Controllers\Front;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=1)
    {
        $off = ($id-1)*5;
        $blogs = Blog::limit(5)->offset($off)->get();
        $older = (count($blogs)>5)?$id:0;

        return view('global.home')->with(array(
            'blogs' =>  $blogs,
            'show_older' => $older
        ));
    }
}