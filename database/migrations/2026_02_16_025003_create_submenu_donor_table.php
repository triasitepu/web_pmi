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
         Schema::create('submenu_donor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_darah_id')
                  ->constrained('donor_darah')
                  ->onDelete('cascade');

            $table->string('nama_submenu');
            $table->string('route')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submenu_donor');
    }
};
