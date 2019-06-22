<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('question');
            // $table->text('option_one')->nullable($value = true);
            // $table->text('option_two')->nullable($value = true);
            // $table->text('option_three')->nullable($value = true);
            // $table->text('option_four')->nullable($value = true);
            // $table->text('option_five')->nullable($value = true);
            // $table->text('option_six')->nullable($value = true);
            // $table->text('option_seven')->nullable($value = true);
            // $table->text('option_eight')->nullable($value = true);
            $table->string('type');
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
        Schema::dropIfExists('surveys');
    }
}
