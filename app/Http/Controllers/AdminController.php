<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function dashboard (){
    	return view('/admin/dashboard');
    }

    public function pages(){
    	return view('/admin/pages');
    }
}
