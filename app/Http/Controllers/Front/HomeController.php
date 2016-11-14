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
        $blogs = Blog::simplePaginate(3);
        //$blogs->setPath('page/'.$blogs->currentPage());

        return view('global.home')->with(array(
            'blogs' =>  $blogs,
            'show_older' => $blogs->hasMorePages(),
            'next_page'  => $blogs->nextPageUrl(),
            'prv_page'  => $blogs->previousPageUrl()
        ));
    }
}