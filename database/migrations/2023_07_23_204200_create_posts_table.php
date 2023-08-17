<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title',100)->nullable();
            $table->longText('post_detail')->nullable();
            $table->string('post_pic1',100)->nullable();
            $table->string('post_pic2',100)->nullable();
            $table->string('post_pic3',100)->nullable();
            $table->string('post_pic4',100)->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('post_creator')->nullable();
            $table->integer('post_editor')->nullable();
            $table->integer('post_status')->default(1);
            $table->string('post_slug')->nullable();
            $table->timestamp('published_at');
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table){
            $table->id();
            $table->foreignId('post_id')->constrained('posts');
            $table->foreignId('tag_id')->constrained('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_tag');
    }
};
