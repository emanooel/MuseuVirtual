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
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("idRocha")->constrained("rochas")->nullable();
            $table->foreignId("idMineral")->constrained("minerals")->nullable();
            $table->foreignId("idJazida")->constrained("jazidas")->nullable();
            $table->boolean("capa");
            $table->string('caminho')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};

/** 
*    public function foreignIdFor($model, $column = null)
*/
