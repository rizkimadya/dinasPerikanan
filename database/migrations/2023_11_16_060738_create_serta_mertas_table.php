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
        Schema::create('serta_mertas', function (Blueprint $table) {
            $table->id();
            $table->string("kategori_serta_merta");
            $table->string("judul_serta_merta");
            $table->text("keterangan_serta_merta")->nullable();
            $table->string("file_serta_merta")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serta_mertas');
    }
};
