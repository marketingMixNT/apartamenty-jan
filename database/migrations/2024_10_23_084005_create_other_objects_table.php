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
        Schema::create('other_objects', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('description');
            $table->text('thumbnail');
            $table->text('address');
            $table->text('mail');
            $table->text('phone');
            $table->text('link');
            $table->integer('sort')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_objects');
    }
};
