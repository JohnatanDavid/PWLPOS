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
        Schema::create('reservasis', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('pelanggan_id');
                $table->unsignedBigInteger('kamar_id');
                $table->date('tanggal_check_in');
                $table->date('tanggal_check_out');
                $table->integer('total_biaya');
                $table->timestamps();
            
                $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->onDelete('cascade');
                $table->foreign('kamar_id')->references('id')->on('kamars')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
