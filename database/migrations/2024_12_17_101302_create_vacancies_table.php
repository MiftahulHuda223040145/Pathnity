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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id')->constrained('categories', 'id');
            $table->foreignId('types_id')->constrained('types', 'id');
            $table->integer('salary')->nullable();
            $table->integer('numberofworker');
            $table->string('description');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus foreign key relasi types_id dan category_id
        Schema::table('vacancies', function (Blueprint $table) {
            $table->dropForeign(['types_id']);
            $table->dropForeign(['category_id']);
        });

        Schema::dropIfExists('vacancies'); // Hapus tabel vacancies
    }
};
