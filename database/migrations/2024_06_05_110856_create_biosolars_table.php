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
        Schema::create('biosolars', function (Blueprint $table) {
            $table->id();
            $table->enum('shift', ['shift_1', 'shift_2']);
            $table->date('tanggal_masuk');
            $table->integer('nilai_akhir')->default(0);
            $table->integer('nilai_awal')->default(0);
            $table->integer('hasil_penjualan')->default(0); // Ubah ke hasil_penjualan
            $table->integer('harga')->default(0);
            $table->integer('total_harga')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biosolars');
    }
};
