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
        Schema::create('computer_mcqs', function (Blueprint $table) {
            $table->id('question_id');
            $table->string('question');
            $table->string('option_a');
            $table->string('option_b');
            $table->string('option_c');
            $table->string('option_d');
            $table->string('option_e')->nullable();
            $table->tinyInteger('correct')->length(1);
            $table->tinyInteger('selected')->default(-1)->length(1);
            $table->string('type')->length(5);
            $table->Integer('subject_id')->length(3);
            $table->string('chapter')->nullable();
            $table->integer('quiz_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computer_mcqs');
    }
};
