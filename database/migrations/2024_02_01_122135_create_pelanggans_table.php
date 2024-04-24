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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->tinyText('alamat')->nullable();
            $table->string('nomor_tlp')->nullable();
            $table->enum('pelangganRole', ['Dodo Sidodo', 'Hanifah']); // Menambahkan kolom pel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
