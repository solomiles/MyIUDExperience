<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SymptomsTracker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('symptoms_trackers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('face')->nullable($value = true);
            $table->string('hairGrowth')->nullable($value = true);
            $table->string('bodyAcne')->nullable($value = true);
            $table->string('thiningHair')->nullable($value = true);
            $table->string('weightGain')->nullable($value = true);
            $table->string('otherAppear')->nullable($value = true);

            $table->string('deviceExpelle')->nullable($value = true);
            $table->string('ruptured')->nullable($value = true);
            $table->string('spodaric')->nullable($value = true);
            $table->string('cysts')->nullable($value = true);
            $table->string('urinary')->nullable($value = true);
            $table->string('pelvic')->nullable($value = true);
            $table->string('painDuringSex')->nullable($value = true);
            $table->string('bacterial')->nullable($value = true);
            $table->string('yeast')->nullable($value = true);
            $table->string('unusualVaginal')->nullable($value = true);
            $table->string('genitialSores')->nullable($value = true);
            $table->string('swollenBreast')->nullable($value = true);
            $table->string('perforation')->nullable($value = true);
            $table->string('missedMenstrual')->nullable($value = true);
            $table->string('toxicShock')->nullable($value = true);
            $table->string('otherGynecological')->nullable($value = true);

            $table->string('depression')->nullable($value = true);
            $table->string('moodSwings')->nullable($value = true);
            $table->string('anger')->nullable($value = true);
            $table->string('lostSexualDesire')->nullable($value = true);
            $table->string('anxiety')->nullable($value = true);
            $table->string('otherMental')->nullable($value = true);

            $table->string('memoryLoss')->nullable($value = true);
            $table->string('fatigue')->nullable($value = true);
            $table->string('lowerBackPain')->nullable($value = true);
            $table->string('lostOfBalance')->nullable($value = true);
            $table->string('headache')->nullable($value = true);
            $table->string('dizziness')->nullable($value = true);
            $table->string('nausea')->nullable($value = true);
            $table->string('endometriosis')->nullable($value = true);
            $table->string('eczema')->nullable($value = true);
            $table->string('itchySkin')->nullable($value = true);
            $table->string('abdominalPain')->nullable($value = true);
            $table->string('anaphylactic')->nullable($value = true);
            $table->string('bloated')->nullable($value = true);
            $table->string('dryEyes')->nullable($value = true);
            $table->string('muscleWeakness')->nullable($value = true);
            $table->string('muscleSpasm')->nullable($value = true);
            $table->string('constipation')->nullable($value = true);
            $table->string('tingling')->nullable($value = true);
            $table->string('edema')->nullable($value = true);
            $table->string('bradycardia')->nullable($value = true);
            $table->string('breastTenderness')->nullable($value = true);
            $table->string('postIud')->nullable($value = true);
            $table->string('otherPhysiological')->nullable($value = true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('symptoms_trackers');
    }
}
