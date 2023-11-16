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
        Schema::create('ssses', function (Blueprint $table) {
            $table->id();
            $table->string("kategori_sss");
            $table->string("judul_sss");
            $table->text("keterangan_sss")->nullable();
            $table->string("file_sss")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ssses');
    }
};
