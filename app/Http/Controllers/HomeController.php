<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $post = Post::select('id', 'category_ID', 'post_content', 'post_image',  'post_title', 'post_slug', 'created_at')->with('Category')->with('Comments')->orderBy('id', 'desc')->take(5)->get();
        
        $categories = Category::GetAllcategory();
        
        return view('home')->with( ['data'=>$post, 'category'=> $categories]);
    }
}
