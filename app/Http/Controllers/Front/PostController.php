<?php

namespace App\Http\Controllers\Front;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\HumanDateTrait;

class PostController extends Controller
{
    use HumanDateTrait;
    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $post = Blog::where('slug', $slug)->get()->first();

        return view('global.post')->with(array(
            'post' =>  $post,
            'date_created' => $this->time_elapsed_string($post->created_at)
        ));
    }
}