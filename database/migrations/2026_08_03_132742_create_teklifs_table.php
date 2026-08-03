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
        Schema::create('teklifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musteri_id')->constrained()->onDelete('cascade');
            $table->string('teklif_no')->unique();
            $table->string('hizmet_turu');
            $table->decimal('tutar', 10, 2);
            $table->date('tarih');
            $table->text('aciklama')->nullable();
            $table->enum('durum', ['draft', 'pending', 'approved', 'rejected', 'no_response', 'deal_failed'])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teklifs');
    }
};
