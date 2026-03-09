<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('submenu', function (Blueprint $table) {
            $table->id('id_submenu');
            $table->string('judul', 100);
            $table->text('isi')->nullable();
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_pengguna')->nullable();

            $table->foreign('id_menu')->references('id')->on('menu')->onDelete('cascade');
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('set null');

            // Opsional: tambah urutan atau created_at manual kalau perlu
            // $table->integer('urutan')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('submenu');
    }
};