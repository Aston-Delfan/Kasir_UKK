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
        Schema::create('detail_penjualan', function (Blueprint $table) {
            $table->id('detail_id');
            $table->integer('jumlah_produk');
            $table->decimal('subtotal', 10, 2);
            $table->foreignId('penjualan_id')
                  ->constrained('penjualan', 'penjualan_id');
            $table->foreignId('produk_id')
                  ->constrained('produk', 'produk_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenjualan');
    }
};
