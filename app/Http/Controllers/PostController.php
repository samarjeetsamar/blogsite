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
    public function  AddNewBlog(){
        $category = Category::select('id', 'category_name')->get();
        return view('/admin/add-new-blog')->with(['category'=> $category]);
    }


    public function AddNewBlogForm(Request $request){
        
        // validation for required fields
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'postthumbnail' => 'required',
            'content' => 'required',
        ]); 
        
        $authid = Auth::user()->id;
        $Catids = array();
        foreach($request->category as $val)
        {
            $Catids[] = (int) $val;
        }
        
        $postthumbnail = upload_image($request,'postthumbnail');
        
        $data = array(  
                    'author_ID'=> $authid,
                    'post_title' => $request->title,
                    'post_image' => $postthumbnail,
                    'post_content' => $request->content,
                    'category_id' => implode('),(', $Catids)
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

    public function EditPostView($id){
        $data = Post::where('id', $id)->select('id', 'post_content', 'post_title', 'post_image', 'category_ID')->first();
        $category = Category::GetAllcategory();
        return view('admin/edit-blog')->with(['data'=> $data, 'category'=> $category]);
    }

    public function UpdatePost(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]);

        $authid = Auth::user()->id;
        $Catids = array();
        foreach($request->category as $val)
        {
            $Catids[] = (int) $val;
        }
        
        $data = array(  
                    'author_ID'=> $authid,
                    'post_title' => $request->title,
                    'post_content' => $request->content,
                    'category_id' => implode('),(', $Catids)
        );

        if(isset($request->postthumbnail)){
            $postthumbnail = upload_image($request,'postthumbnail');
            $data['post_image'] = $postthumbnail;
        }
        
        $update = Post::where('id', $request->post_id)->update($data);

        Session::flash('message', "Post created successfully");
        return Redirect::back();



    }

}
