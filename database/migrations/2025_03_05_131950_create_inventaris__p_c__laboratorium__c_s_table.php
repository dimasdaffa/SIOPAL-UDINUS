<?php

use Illuminate\Support\Facades\DB;
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::create('inventaris__p_c__laboratorium__c_s', function (Blueprint $table) {
            $table->id();
            $table->string('no_inventaris')->unique();
            $table->unsignedBigInteger('motherboard_id');
            $table->unsignedBigInteger('processor_id');
            $table->unsignedBigInteger('penyimpanan_id');
            $table->unsignedBigInteger('vga_id');
            $table->unsignedBigInteger('ram_id');
            $table->unsignedBigInteger('dvd_id');
            $table->unsignedBigInteger('keyboard_id');
            $table->unsignedBigInteger('mouse_id'); //mouse=model, mice=table
            $table->unsignedBigInteger('monitor_id');
            $table->unsignedBigInteger('headphone_id');
            $table->timestamps();

            $table->foreign('motherboard_id')->references('id')->on('motherboards')->onDelete('cascade');
            $table->foreign('processor_id')->references('id')->on('processors')->onDelete('cascade');
            $table->foreign('penyimpanan_id')->references('id')->on('penyimpanans')->onDelete('cascade');
            $table->foreign('vga_id')->references('id')->on('v_g_a_s')->onDelete('cascade');
            $table->foreign('ram_id')->references('id')->on('r_a_m_s')->onDelete('cascade');
            $table->foreign('dvd_id')->references('id')->on('d_v_d_s')->onDelete('cascade');
            $table->foreign('keyboard_id')->references('id')->on('keyboards')->onDelete('cascade');
            $table->foreign('mouse_id')->references('id')->on('mice')->onDelete('cascade');
            $table->foreign('monitor_id')->references('id')->on('monitors')->onDelete('cascade');
            $table->foreign('headphone_id')->references('id')->on('headphones')->onDelete('cascade');

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris__p_c__laboratorium__c_s');
    }
};
