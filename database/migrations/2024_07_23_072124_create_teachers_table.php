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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('title_id'); // foriegnId คือ การทำ foeiginKey
            $table->string('name')->nullable();
            $table->string('lastname')->nullable(); // nullable คือ อนุญาตให้เป็นค่าว่างได้
            $table->string('email')->unique()->nullable(); // unique คือ ห้ามอีเมลซ้ำ
            $table->foreignId('province_id'); // foriegnId คือ การทำ foeiginKey
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
