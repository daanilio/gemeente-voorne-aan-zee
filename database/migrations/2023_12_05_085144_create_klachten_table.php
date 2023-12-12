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
        Schema::create('klachten', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('email');
            $table->text('klacht');
            $table->string('lat');
            $table->string('long');
            $table->string('foto')->nullable();
            $table->string('opgelost')->default('nee');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klachten');
    }
};
