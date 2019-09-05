<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');
            $table->text('content');
            $table->timestamps();
            //establishes relationship between post_id to blog_posts table
            $table->foreign('post_id')->references('id')->on('blog_posts_models')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         //Drop the foreign key index
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('post_id_foreign');
            $table->dropForeign('user_id_foreign');
        });

        Schema::dropIfExists('comments');
    }
}