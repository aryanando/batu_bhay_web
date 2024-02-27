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
        Schema::create('koesioner_gizi', function (Blueprint $table) {
            $table->id();
            $table->text('no_rawat');
            $table->text('nama');
            $table->text('bgsl');
            $table->boolean('rasa');
            $table->boolean('penampilan');
            $table->boolean('tekstur');
            $table->boolean('variasi');
            $table->text('saran')->nullable();
            $table->date('tgl');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koesioner_gizi');
    }
};
