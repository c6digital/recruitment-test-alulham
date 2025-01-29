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
        Schema::create('health_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('pcon_code');
            $table->string('pcon_name');
            $table->string('group_code');
            $table->float('prevalence');
            $table->string('condition');
            $table->text('description');
            $table->timestamps();

            // Add indexes for common queries
            $table->index('pcon_code');
            $table->index('pcon_name');
            $table->index('group_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_conditions');
    }
};
