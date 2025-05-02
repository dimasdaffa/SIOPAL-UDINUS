<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //
    public function up(): void
    {
        Schema::create('v_g_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('no_inventaris')->unique();
            $table->string('merk');
            $table->string('tipe');
            $table->string('spesifikasi');
            $table->integer('kapasitas');
            $table->string('full_name')->virtualAs('concat(merk,\'-\',tipe, \'-\',kapasitas,\'GB\')');
            $table->year('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('v_g_a_s');
    }
};
