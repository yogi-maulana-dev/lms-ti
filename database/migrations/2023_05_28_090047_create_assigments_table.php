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
        Schema::create('assigments', function (Blueprint $table) {
            $table->id();
            $table->integer('elearning_ID')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('file')->nullable();
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->enum('working_status', ['0', '1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigments');
    }
};
