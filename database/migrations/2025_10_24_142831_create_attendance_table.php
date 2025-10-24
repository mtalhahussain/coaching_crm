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
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('batch_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->enum('status', ['present', 'absent', 'late'])->default('present');
            $table->text('remarks')->nullable();
            $table->timestamps();
            
            $table->unique(['student_id', 'batch_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
