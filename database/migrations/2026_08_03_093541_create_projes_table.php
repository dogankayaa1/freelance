<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Scalar\String_;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projes', function (Blueprint $table) {
            $table->id();
            $table->string('proje_adi');
            $table->string('musteri');
            $table->string('durum');
            $table->string('aciklama');
            $table->date('baslangic');
            $table->date('bitis');
            $table->float('butce');
            $table->string('oncelik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projes');
    }
};
