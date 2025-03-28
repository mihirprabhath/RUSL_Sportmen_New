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
        Schema::create('special_gb', function (Blueprint $table) {
            $table->id();
            $table->string('booker_name');
            $table->string('contact_number');
            $table->date('date');
            $table->time('time');
            $table->string('place');
            $table->string('sport');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_gb');
    }
};
