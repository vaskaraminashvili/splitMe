<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('module_generators', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('properties')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('sort')->nullable();
            $table->foreignId('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('module_generators');
    }
};
