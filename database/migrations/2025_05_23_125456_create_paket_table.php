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
       Schema::create('paket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destinasi_id');
            $table->string('nama_paket');
            $table->string('gambar');
            $table->integer('harga');
            $table->text('fasilitas');
            $table->string('durasi');
            $table->boolean('populer')->default(false);
            $table->timestamps();
            $table->foreign('destinasi_id')->references('id')->on('destinasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
