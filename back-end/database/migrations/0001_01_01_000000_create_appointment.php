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

        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->string('clientName');
            $table->string('symptoms');
            $table->integer('animalAge');
            $table->string('assigned');
            $table->string('code');
            $table->string('requesterName');
            $table->string('requesterEmail');
            $table->string('animalName');
            $table->enum('type', ['Dog', 'Cat', 'Bird', 'Other']);
            $table->dateTime('date');
            $table->string('shift');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
