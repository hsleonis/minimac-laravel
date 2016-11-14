<?php

namespace App\Http\Controllers\Front;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=1)
    {
        $post = Blog::where('id', $id)->get()->first();

        return view('global.post')->with(array(
            'post' =>  $post,
        ));
    }
}