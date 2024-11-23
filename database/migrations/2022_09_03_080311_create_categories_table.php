<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('parent_id')->default(0);
            $table->string('slug');
            $table->string('type', 10);
            $table->string('description')->nullable();

            $table->timestamps();
        });

        Schema::create('category_model', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('model_id');
            $table->string('model_type', 60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_model');
    }
};
