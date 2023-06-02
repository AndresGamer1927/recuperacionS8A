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
        Schema::create('conocido_contacto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("conocido_id");
            $table->foreign('conocido_id')->references('id')->on('conocidos');
            $table->unsignedBigInteger("contacto_id");
            $table->foreign('contacto_id')->references('id')->on('contactos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conocido_contacto');
    }
};
