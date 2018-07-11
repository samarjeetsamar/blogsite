<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $timestamps = true;

    protected $fillable = [
        'id', 'post_ID', 'comment_author','comment_author_email','comment_author_url','comment_author_IP','comment_content','comment_approved','user_id'
    ];
}
