<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public  $timestamps = true;

    protected $fillable = [
        'id', 'author_id', 'category_ID','post_content','post_title','post_slug','post_type'
    ];
}
