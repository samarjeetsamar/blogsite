<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use DB;
use Auth;
use App\User;
use App\Post;
use Session;
use Redirect;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function admin()
    {
        return view('/admin/dashboard');
    }

    public function dashboard (){
        return view('/admin/dashboard');
    }

    public function pages(){
        $data = Post::select( 'id', 'author_ID', 'category_ID', 'post_image', 'post_content', 'post_title','post_slug')->orderBy('id', 'desc')->paginate(config('app.paginate'));
        return view('/admin/blogs')->with(['data' => $data]);
    }

    
}
