<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'question', 'type', 
    ];

    public function options()
   {
       return $this->hasMany(Options::class);
   }
}
