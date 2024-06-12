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
        Schema::create('copies_useers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('copie_id')->nullable();
            $table->unsignedBigInteger('useer_id')->nullable();

            $table->foreign('copie_id')
            ->references('id')
            ->on('copies')->onDelete('cascade');

            $table->foreign('useer_id')
            ->references('id')
            ->on('useers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies_useers');
    }
};

