<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $timestamps = true;

    protected $fillable = [
        'id', 'category_name', 'category_slug',
    ];


    public function GetcategorybyId($id){
        return $categoryname = Category::select('category_name')->where('id', $id);
    }
}
