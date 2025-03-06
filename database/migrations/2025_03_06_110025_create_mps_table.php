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
        Schema::create('mps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('party');
            $table->string('photo');
            $table->string('pcon_code');
            $table->string('pcon_name');
            $table->string('parliament_id');
            $table->timestamps();

            // Add indexes for common queries
            $table->index('pcon_code');
            $table->index('pcon_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mps');
    }
};
