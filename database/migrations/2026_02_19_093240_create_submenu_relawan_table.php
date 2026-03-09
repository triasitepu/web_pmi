<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('submenu_relawan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('relawan_id')
                  ->constrained('relawan')
                  ->onDelete('cascade');

            $table->string('nama_submenu');
            $table->string('slug')->nullable();
            $table->text('isi')->nullable();
            $table->string('foto')->nullable();
            $table->integer('urutan')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('submenu_relawan');
    }
};
