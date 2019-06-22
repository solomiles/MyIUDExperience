<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class symptoms extends Model
{
    //

    protected $fillable = [
        'user_id', 'type', 'apperance_change', 'physical_pain', 'gynecological_issue', 'mental_health', 'other',
    ];

    public function user()
   {
       return $this->hasMany(User::class);
   }
}
