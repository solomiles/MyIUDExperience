<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    //
    protected $fillable = [
        'survey_id', 'options', 
    ];

    public function survey()
   {
       return $this->belongsTo(Survey::class);
   }


}
