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
        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->string('sm_facebok',50)->nullable();
            $table->string('sm_insta',50)->nullable();
            $table->string('sm_youtube',50)->nullable();
            $table->string('sm_twitter',50)->nullable();
            $table->string('sm_linkedIn',50)->nullable();
            $table->string('sm_dribble',50)->nullable();
            $table->integer('sm_editor')->nullable();
            $table->integer('sm_status')->default(1);
            $table->string('sm_slug',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_media');
    }
};
