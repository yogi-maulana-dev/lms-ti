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
        Schema::create('clasrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('code')->nullable();
            $table->integer('teacher_ID')->nullable();
            $table->integer('quiz_name_ID')->nullable();
            $table->integer('multiple_choice_limit')->nullable();
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->enum('working_status', ['0', '1']);
            $table->enum('show_result', ['0', '1']);
            $table->integer('student_group')->nullable();
            $table->enum('random_choice', ['0', '1']);
            $table->enum('random_number', ['0', '1']);
            $table->enum('lock', ['0', '1']);
            $table->enum('scheduled', ['0', '1']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clasrooms');
    }
};
