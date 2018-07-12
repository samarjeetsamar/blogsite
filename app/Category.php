<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $timestamps = true;

    protected $fillable = [
        'id', 'category_name', 'category_slug',
    ];

    public function posts()
    {   
        return $this->hasMany('App\Post','Category_ID');
    }


    public static function GetcategorybyId($id){
        return $categoryname = Category::select('category_name')->where('id', $id);
    }

    public static function GetAllcategory(){
        return $categoryname = Category::select('id', 'category_name')->get();
    }
}
