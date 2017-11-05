<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function aboutUs() {
    	return view('/aboutus');
    }

    public function contactForm(){
    	return view('/contact');
    }
}
