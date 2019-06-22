<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;

class Forum extends Model
{
    use Notifiable;
    //

    protected $fillable = [
        'user_id', 'topic', 'slug',
    ];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'topic'
            ]
        ];
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forumcomments()
    {
        return $this->hasMany(ForumComments::class);
    }
}
