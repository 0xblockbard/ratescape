<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogposts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tagline', 150)->nullable();
            $table->string('excerpt')->nullable();
            $table->string('layout_type', 30)->nullable();
            $table->string('slug');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();

            $table->string('featured_image')->nullable();
            
            $table->string('uuid');
            $table->string('type', 30)->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->datetime('published_at')->nullable();
            $table->boolean('custom_slug')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogposts');
    }
}
