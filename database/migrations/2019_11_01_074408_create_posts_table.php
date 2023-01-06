<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->longText('content');
            $table->string('background_image')->default('default-post.jpg');
            $table->integer('status')->default(1);
            $table->integer('type')->default(1);
            $table->bigInteger('comment_count')->unsigned()->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
