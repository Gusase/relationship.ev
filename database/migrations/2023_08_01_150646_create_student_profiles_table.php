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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->date('birth');
            $table->string('phone_number');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->string('guardian_name')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->json('hobbies')->nullable();
            $table->text('achievements')->nullable()->default(null);
            $table->text('notes')->nullable()->default(null);
            $table->unsignedBigInteger('student_id'); // Kunci asing yang menghubungkan ke tabel 'students'
            $table->timestamps();

            // Definisi kunci asing
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
