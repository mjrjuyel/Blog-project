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
        Schema::create('basics', function (Blueprint $table) {
            $table->bigIncrements('basic_id');
            $table->string('basic_logo',100)->nullable();
            $table->string('basic_logo_title',20);
            $table->text('basic_about')->nullable();
            $table->string('basic_copyright')->nullable();
            $table->string('basic_slug',20)->nullable();
            $table->integer('basic_creator')->nullable();
            $table->integer('basic_editor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basics');
    }
};
