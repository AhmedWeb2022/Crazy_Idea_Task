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
        Schema::create('stage_course', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("stage_id");
            $table->unsignedBigInteger("course_id");
            $table->timestamps();
            $table->foreign("course_id")->references("id")->on("courses")->cascadeOnDelete();
            $table->foreign("stage_id")->references("id")->on("stages")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stage_course');
    }
};
