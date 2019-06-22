<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_comments', function (Blueprint $table) {
            $table->bigIncrements('id');          
            $table->unsignedBigInteger('forum_id');
            $table->foreign('forum_id')->references('id')
                ->on('forums')
                ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')
            ->on('users')
            ->onDelete('cascade');
            // $table->string('posted_by');
            $table->string('comments');
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
        Schema::dropIfExists('forum_comments');
    }
}
