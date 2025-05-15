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
        Schema::create('poins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('klaster_id')->constrained()->onDelete('cascade');
            $table->string('judul');
            $table->decimal('nilai', 8, 2)->default(0);
            $table->decimal('nilai_maksimal', 8, 2)->default(0);
            $table->string('terpenuhi')->nullable(); // misal: 4/4
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poin_indikators');
    }
};
