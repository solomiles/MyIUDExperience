<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSymptoms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptoms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('symptoms_category_id');
            $table->foreign('symptoms_category_id')
                ->references('id')
                ->on('symptoms_categories')
                ->onDelete('cascade');
            $table->string('symptoms_name');
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
        Schema::dropIfExists('symptoms');
    }
}
