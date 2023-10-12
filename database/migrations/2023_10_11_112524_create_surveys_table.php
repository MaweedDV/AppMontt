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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('name_survey');
            $table->date('date_attention');
            $table->string('juridic_quality');
            $table->string('escale');
            $table->string('age_range');
            $table->string('genre');
            $table->string('years_antiquity');
            $table->string('place_job');
            $table->string('q8');
            $table->string('a8');
            $table->string('q9');
            $table->string('a9');
            $table->string('q10');
            $table->integer('a10');
            $table->string('q11');
            $table->integer('a11');
            $table->string('q12');
            $table->integer('a12');
            $table->string('q13');
            $table->integer('a13');
            $table->string('q14');
            $table->integer('a14');
            $table->string('q15');
            $table->integer('a15');
            $table->string('q16');
            $table->integer('a16');
            $table->string('q17');
            $table->string('a17');
            $table->string('q18');
            $table->longText('a18')->nullable();
            $table->string('q19');
            $table->integer('a19');
            $table->string('q20');
            $table->integer('a20');
            $table->string('q21');
            $table->integer('a21');
            $table->string('q22');
            $table->integer('a22');
            $table->string('q23');
            $table->integer('a23');
            $table->string('q24');
            $table->longText('a24')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
