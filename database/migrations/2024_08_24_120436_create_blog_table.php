<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title'); // Title of the blog post
            $table->text('content'); // Content of the blog post
            $table->string('author'); // Author of the blog post
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('slug')->unique(); // URL-friendly version of the title
            $table->boolean('published')->default(false); // Whether the post is published
            $table->timestamp('published_at')->nullable(); // When the post was published
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete timestamp
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
