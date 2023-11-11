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
        Schema::create('college_stage', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("college_id");
            $table->unsignedBigInteger("stage_id");
            $table->timestamps();
            $table->foreign("college_id")->references("id")->on("colleges")->cascadeOnDelete();
            $table->foreign("stage_id")->references("id")->on("stages")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_stage');
    }
};
