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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the series
            $table->string('genre'); // Genre of the series
            $table->unsignedInteger('seasons'); // Number of seasons (unsigned)
            $table->unsignedInteger('episodes'); // Number of episodes (unsigned)
            $table->text('description')->nullable(); // Description of the series
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
