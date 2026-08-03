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
        Schema::create('islems', function (Blueprint $table) {
            $table->id();
            $table->enum('tip', ['gelir', 'gider', 'transfer']);
            $table->string('baslik');
            $table->decimal('tutar', 10, 2);
            $table->string('kategori')->nullable();
            $table->date('tarih');
            $table->text('aciklama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('islems');
    }
};
