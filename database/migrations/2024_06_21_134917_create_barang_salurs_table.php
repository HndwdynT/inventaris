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
        Schema::create('barang_salurs', function (Blueprint $table) {
            $table->id(); // Tambahkan kolom 'id' dengan tipe data yang sesuai
            $table->string('id_ruang');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('jumlah_barang');
            $table->string('harga_beli');
            $table->string('keadaan_barang');
            $table->string('sumber_dana');
            $table->string('tahun_pengadaan');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_salurs');
    }
};
