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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('cat_id');
            $table->string('cat_title',50)->nullable();
            $table->text('cat_detail')->nullable();
            $table->string('cat_slug',20)->nullable();
            $table->integer('cat_status')->default(1);
            $table->integer('cat_creator')->nullable();
            $table->integer('cat_editor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
