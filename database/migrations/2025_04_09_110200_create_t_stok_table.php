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
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id'); // Primary Key
            $table->unsignedBigInteger('barang_id')->index(); // Foreign Key ke m_barang
            $table->unsignedBigInteger('user_id')->index(); // Foreign Key ke m_user
            $table->datetime('stok_tanggal');
            $table->integer('stok_jumlah'); // Tidak perlu parameter kedua pada integer()
            $table->timestamps();

            // Foreign Keys
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
            $table->foreign('user_id')->references('user_id')->on('m_user');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
