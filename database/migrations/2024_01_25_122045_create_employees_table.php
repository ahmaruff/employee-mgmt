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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female']);
            $table->string('address');
            $table->unsignedBigInteger('division_id');
            $table->timestamps();

            $table->foreign('division_id')->references('id')->on('divisions')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
