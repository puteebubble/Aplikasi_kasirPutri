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
        Schema::create('detil_penjualans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penjualan_id')
            ->constrained()
            ->cascadeOnDelete()
            ->noActionOnUpdate();
        $table->foreignId('produk_id')
            ->constrained()
            ->cascadeOnDelete()
            ->noActionOnUpdate();
        $table->unsignedInteger('jumlah');
        $table->unsignedInteger('harga_produk');
        $table->unsignedInteger('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus tabel detil_penjualans jika rollback migrasi
        Schema::dropIfExists('detil_penjualans');
    }
};
