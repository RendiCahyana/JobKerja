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
        Schema::create('job_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerjaan'); // Nama pekerjaan
            $table->text('deskripsi')->nullable(); // Deskripsi pekerjaan
            $table->decimal('gaji', 10, 2)->nullable(); // Gaji dalam format desimal
            $table->string('lokasi')->nullable(); // Lokasi pekerjaan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_kerja');
    }
};
