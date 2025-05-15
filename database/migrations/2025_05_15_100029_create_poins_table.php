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
            $table->unsignedBigInteger('klaster_id'); // foreign key ke klasters
            $table->string('judul');                 // nama poin
            $table->integer('nilai')->default(0);    // nilai saat ini
            $table->integer('nilai_maksimal');       // nilai maksimal
            $table->integer('terpenuhi')->default(0); // jumlah indikator terpenuhi
            $table->integer('total')->default(0);     // jumlah total indikator
            $table->timestamps();

            $table->foreign('klaster_id')->references('id')->on('klasters')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poins');
    }
};
