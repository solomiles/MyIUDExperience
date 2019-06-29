<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    //
    protected $fillable = [
        'survey_id', 'option_one', 'option_two', 'option_three', 'option_four',
        'option_five', 'option_six', 'option_seven', 'option_eight', 'option_nine', 'option_ten', 'option_eleven', 'option_twelve', 'option_thirteen', 
    ];

    public function survey()
   {
       return $this->belongsTo(Survey::class);
   }


}
