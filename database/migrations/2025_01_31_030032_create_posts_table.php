<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //buat bikin tabel
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique(); // sinkatan judul
            $table->text('description')->nullable(); //
            $table->text('content')->nullable(); //
            $table->enum('status', ['draf', 'publish'])->default('draf'); //
            $table->string('thumbnail')->nullable(); //

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //foreign key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //buat hapus tabel0
    {
        Schema::dropIfExists('posts');
    }
};
