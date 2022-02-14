<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            $table->text('content');

            $table->unsignedInteger('blog_post_id')->contrained('blog_posts');
            $table->unsignedInteger('user_id')->contrained('users');
            // $table->string("content");
            // $table->string("blog_post_id");
            // $table->string("address")->nullable();
            // $table->timestamps();
            // $table->softDeletes();
            // $table->foreign('blog_post_id')->references('id')->on('blog_post');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
