<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class symptomsTracker extends Model
{
    //
    protected $fillable = [
        'user_id',
        'symptoms_id',    
        'symptoms_level',
    ];

    public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function symptoms()
   {
       return $this->belongsTo(symptoms::class);
   }
}
