<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class symptomsTracker extends Model
{
    //
    protected $fillable = [
        'user_id',
        'face',    
        'hairGrowth',
        'bodyAcne',
        'thiningHair',
        'weightGain',
        'otherAppear',
        'deviceExpelle',    
        'ruptured',
        'spodaric',
        'cysts',
        'urinary',
        'pelvic',    
        'painDuringSex',
        'bacterial',
        'yeast',
        'unusualVaginal',
        'genitialSores',
        'swollenBreast',
        'perforation',
        'missedMenstrual', 
        'toxicShock',
        'otherGynecological',
        'depression',
        'moodSwings',
        'anger',
        'lostSexualDesire',
        'anxiety',
        'otherMental',
        'memoryLoss',    
        'fatigue',
        'lowerBackPain',
        'lostOfBalance',
        'headache',
        'dizziness',
        'nausea',
        'endometriosis',
        'eczema',
        'itchySkin',
        'abdominalPain',
        'anaphylactic',    
        'bloated',
        'dryEyes',
        'muscleWeakness',
        'muscleSpasm',
        'constipation',
        'tingling',
        'edema',
        'bradycardia',
        'breastTenderness',    
        'postIud',
        'otherPhysiological',
    ];

    public function user()
   {
       return $this->hasMany(User::class);
   }
}
