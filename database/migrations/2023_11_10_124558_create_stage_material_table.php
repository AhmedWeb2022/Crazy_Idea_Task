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
        Schema::create('stage_material', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("stage_id");
            $table->unsignedBigInteger("material_id");
            $table->timestamps();
            $table->foreign("stage_id")->references("id")->on("stages")->cascadeOnDelete();
            $table->foreign("material_id")->references("id")->on("materials")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stage_material');
    }
};
