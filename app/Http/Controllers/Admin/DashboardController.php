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
    public function savepost(Request $request){

        $insertData = array(
            "title"	    =>	Input::get("title"),
            "subtitle"	=>	Input::get("subtitle"),
            "content"	=>	Input::get("content"),
            "category"	=>	Input::get("category"),
            "tags"	    =>	Input::get("tags"),
            "image"     => '',
            "user"      => Auth::user()->name
        );

        $save = Blog::create($insertData);

        $request->session()->flash('alert-success', 'Post published successfully!');
        return view('admin.newpost');
    }
}