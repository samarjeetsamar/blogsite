<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class PagesController extends Controller
{
    public function aboutUs() {
        $categories = Category::GetAllcategory();
    	return view('/aboutus')->with(['category'=> $categories]);
    }

    public function contactForm(){
        $categories = Category::GetAllcategory();
    	return view('/contact')->with(['category'=> $categories]);
    }

    public function createPage(Request $request){
        
    }
}
