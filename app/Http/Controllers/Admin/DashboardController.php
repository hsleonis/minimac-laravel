<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show new post entry panel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newpost(){
        return view('admin.newpost');
    }

    /**
     * save post to database
     */
    public function savepost(Request $request)
    {
        $insertData = array(
            "title"	    =>	Input::get("title"),
            "slug"      =>  str_slug(Input::get("title")),
            "subtitle"	=>	Input::get("subtitle"),
            "content"	=>	Input::get("content"),
            "category"	=>	Input::get("category"),
            "tags"	    =>	Input::get("tags"),
            "image"     => 'http://lorempixel.com/950/480/?83404',
            "user"      => Auth::user()->name
        );

        $save = Blog::create($insertData);

        $request->session()->flash('alert-success', 'Post published successfully!');
        return view('admin.newpost');
    }

    public function allposts($id=1){
        $limit = config('blog.posts_per_page');
        $offset = ($id-1)*$limit;

        $blogs = Blog::orderBy('published_at', 'desc')->limit($limit)->offset($offset)->get();
        $all = count(Blog::all());

        $next_page = ($all>$offset+$limit)?'admin/blog/'.($id+1):0;
        $prv_page = ($id>1)?'admin/blog/'.($id-1):0;

        return view('admin.allposts')->with(array(
            'blogs' =>  $blogs,
            'next_page' => $next_page,
            'prv_page'  => $prv_page
        ));
    }
}