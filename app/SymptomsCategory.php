<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SymptomsCategory extends Model
{
    //
    protected $fillable = [
        'category',
    ];

    public function symptoms() {
        return $this->hasMany(symptoms::class);
    }
}
