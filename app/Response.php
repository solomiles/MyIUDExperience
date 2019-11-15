<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    //
    protected $fillable = [
        'user_id','survey_id', 'response',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
