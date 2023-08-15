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
        Schema::create('beranda', function (Blueprint $table) {
            $table->id();
            $table->string('utama_img');
            $table->string('desc_ttg');
            $table->string('sert_logo');
            $table->string('sert_link');
            $table->string('sert_desc');
            $table->string('awasi_logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beranda');
    }
};
