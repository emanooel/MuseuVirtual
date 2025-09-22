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
        Schema::create('mineral_rocha', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('rocha_id')
                ->constrained('rochas')
                ->onDelete('cascade');
            
            $table->foreignId('mineral_id')
                ->constrained('minerais')
                ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mineral_rocha');
    }
};
    