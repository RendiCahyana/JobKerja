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
        Schema::create('form', function (Blueprint $table) {
            $table->id_form();
            $table->string('nama'); // Kolom untuk menyimpan nama
            $table->string('email')->unique(); // Kolom untuk menyimpan email (unique untuk menghindari duplikasi)
            $table->string('berkas'); // Kolom untuk menyimpan path berkas/file
            $table->timestamps(); // Kolom created_at dan updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
