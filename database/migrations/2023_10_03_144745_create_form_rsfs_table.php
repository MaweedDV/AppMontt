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
        Schema::create('form_rsfs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_attention');
            $table->time('hour_attention');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('place_job');
            $table->string('type_procedure');
            $table->string('area_attention');
            $table->string('observation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_rsfs');
    }
};
