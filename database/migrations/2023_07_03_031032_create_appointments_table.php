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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('pet_name');
            $table->string('pet_type');
            $table->string('doctor_name');
            $table->integer('service_id');
            $table->date('first_date');
            $table->date('second_date');
            $table->string('part_of_the_Day1');
            $table->string('part_of_the_Day2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
