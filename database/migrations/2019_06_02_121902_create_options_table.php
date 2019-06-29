<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('survey_id');
            $table->foreign('survey_id')->references('id')
                ->on('surveys')
                ->onDelete('cascade');
            $table->text('option_one')->nullable($value = true);
            $table->text('option_two')->nullable($value = true);
            $table->text('option_three')->nullable($value = true);
            $table->text('option_four')->nullable($value = true);
            $table->text('option_five')->nullable($value = true);
            $table->text('option_six')->nullable($value = true);
            $table->text('option_seven')->nullable($value = true);
            $table->text('option_eight')->nullable($value = true);
            $table->text('option_nine')->nullable($value = true);
            $table->text('option_ten')->nullable($value = true);
            $table->text('option_eleven')->nullable($value = true);
            $table->text('option_twelve')->nullable($value = true);
            $table->text('option_thirteen')->nullable($value = true);
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
        Schema::dropIfExists('options');
    }
}
