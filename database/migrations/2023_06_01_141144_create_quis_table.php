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
        Schema::create('quis', function (Blueprint $table) {
            $table->id();
            $table->text('question')->nullable();
            $table->text('audio')->nullable();
            $table->text('image')->nullable();
            $table->text('answer_1')->nullable();
            $table->text('answer_2')->nullable();
            $table->text('answer_3')->nullable();
            $table->text('answer_4')->nullable();
            $table->text('answer_5')->nullable();
            $table->text('answer_key')->nullable();
            $table->text('explanation')->nullable();
            $table->enum('quiz_type', ['0', '1']);
            $table->integer('quiz_name_ID')->nullable();
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->timestamps();       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quis');
    }
};
