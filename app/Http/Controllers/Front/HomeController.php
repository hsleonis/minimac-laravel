<?php

namespace App\Http\Controllers\Front;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\HumanDateTrait;

class HomeController extends Controller
{
    use HumanDateTrait;
    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=1)
    {
        $limit = 3;
        $offset = ($id-1)*$limit;

        $blogs = Blog::limit($limit)->offset($offset)->get();
        $all = count(Blog::all());

        $next_page = ($all>$offset+$limit)?'page/'.($id+1):0;
        $prv_page = ($id>1)?'page/'.($id-1):0;

        return view('global.home')->with(array(
            'blogs' =>  $blogs,
            'next_page' => $next_page,
            'prv_page'  => $prv_page
        ));
    }
}