<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumComments extends Model
{
    //
    protected $fillable = [
        'forum_id', 'user_id', 'comments',
    ];


    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
