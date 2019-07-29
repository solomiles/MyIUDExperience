<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class symptoms extends Model
{
    //

    protected $fillable = [
        'symptoms_category_id','symptoms_name',
        
    ];
   

   public function symptomstracker()
   {
       return $this->hasMany(SymptomsTracker::class);
   }
   public function symptomscategory()
   {
       return $this->belongsTo(SymptomsCategory::class);
   }
}
