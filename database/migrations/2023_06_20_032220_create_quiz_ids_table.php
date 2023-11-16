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
        Schema::create('quiz_ids', function (Blueprint $table) {
            $table->id('quiz_id');
            $table->string('quiz_name', 20)->unique();
            $table->boolean('is_published')->default(false);
            $table->unsignedBigInteger('exam_id');
            $table->foreign('exam_id')->references('exam_id')->on('exams');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('exam_categories');
            $table->integer('total_questions')->length(3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_ids');
    }
};
