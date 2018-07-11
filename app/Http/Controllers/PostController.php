<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use Auth;
use Session;
use Redirect;


class PostController extends Controller
{
    public function  AddNewBlog (){

        $category = Category::select('id', 'category_name')->get();

        return view('/admin/add-new-blog')->with(['category'=> $category]);
    }


    public function AddNewBlogForm(Request $request){
        
        // validation for required fields
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]); 
        
        $authid = Auth::user()->id;

        

        $ids = array();
        foreach($request->category as $val)
        {
            $ids[] = (int) $val;
        }

        $data = array(  
                    'author_ID'=> $authid,
                    'post_title' => $request->title,
                    'post_content' => $request->content,
                    'category_id' => implode('),(', $ids)
        );
        $insert = Post::insert($data);
        Session::flash('message', "Post created successfully");
        return Redirect::back();
    }

    public function DeletePost($id){
        $deletePost = Post::where('id', $id)->delete();
        if($deletePost > 0 ){
            Session::flash('message', "Post deleted successfully");
        }else{
            Session::flash('message', "Post not deleted successfully");
        }
        return Redirect::back();
    }
}
