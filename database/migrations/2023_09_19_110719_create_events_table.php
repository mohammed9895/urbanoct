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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('slogan')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('cto_text')->nullable();
            $table->text('cto_link')->nullable();
            $table->text('cto_icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
