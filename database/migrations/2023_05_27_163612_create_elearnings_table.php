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
        Schema::create('elearnings', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_siswa');
            $table->string('name');
            $table->string('description');
            $table->string('code');
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->timestamps();
            $table->integer('teacher_ID');
            $table->integer('student_group');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elearnings');
    }
};
