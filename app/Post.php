<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public  $timestamps = true;

    protected $fillable = [
        'id', 'author_id', 'category_ID','post_content', 'post_image', 'post_title','post_slug','post_type'
    ];


    public function Category()
    {
        return $this->BelongsTo('App\Category', 'category_ID');
    }

    public function Comments()
    {
        return $this->hasMany('App\Comment', 'post_ID');
    }
}
