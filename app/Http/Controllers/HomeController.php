<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
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
        
        $post = Post::select('id', 'category_ID', 'post_content', 'post_title', 'post_slug', 'created_at')->orderBy('id', 'DESC')->take(5)->get();
        
        return view('home')->with( ['data'=>$post] );
    }
}
