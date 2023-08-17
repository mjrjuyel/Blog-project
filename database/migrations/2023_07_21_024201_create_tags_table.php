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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag_title',50)->nullable();
            $table->string('tag_description',100)->nullable();
            $table->string('tag_slug',20)->nullable();
            $table->integer('tag_creator')->nullable();
            $table->integer('tag_editor')->nullable();
            $table->integer('tag_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        
    }
};
