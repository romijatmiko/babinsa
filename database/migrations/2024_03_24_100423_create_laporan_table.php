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
        Schema::create('laporans', function (Blueprint $table) {
         $table->id();
    $table->string('title');
    $table->text('isi');
    $table->text('img');
    $table->string('status');
	$table->string('distrik');
    $table->string('imgs')->null();
    $table->string('surat')->null();
    $table->string('pesan')->null();
    $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
