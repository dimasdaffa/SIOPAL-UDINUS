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
        Schema::create('inventaris__p_c__laboratorium__a_s', function (Blueprint $table) {
            $table->id();
            $table->string('no_inventaris')->unique();
            $table->foreignId('motherboard_id')->constrained('motherboards')->onDelete('cascade');
            $table->foreignId('processor_id')->constrained('processors')->onDelete('cascade');
            $table->foreignId('penyimpanan_id')->constrained('penyimpanans')->onDelete('cascade');
            $table->foreignId('vga_id')->constrained('v_g_a_s')->onDelete('cascade');
            $table->foreignId('ram_id')->constrained('r_a_m_s')->onDelete('cascade');
            $table->foreignId('dvd_id')->constrained('d_v_d_s')->onDelete('cascade');
            $table->foreignId('keyboard_id')->constrained('keyboards')->onDelete('cascade');
            $table->foreignId('mouse_id')->constrained('mice')->onDelete('cascade'); //mouse=model, mice=table
            $table->foreignId('monitor_id')->constrained('monitors')->onDelete('cascade');
            $table->foreignId('headphone_id')->constrained('headphones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris__p_c__laboratorium__a_s');
    }
};
