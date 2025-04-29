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
        Schema::create('labresources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pc_id');
            $table->unsignedBigInteger('nonpc_id');
            $table->unsignedBigInteger('software_id');
            $table->timestamps();

            $table->foreign('pc_id')->references('id')->on('p_c_s')->onDelete('cascade');
            $table->foreign('nonpc_id')->references('id')->on('nonpcs')->onDelete('cascade');
            $table->foreign('software_id')->references('id')->on('software')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labresources');
    }
};
