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
        Schema::create('university_center', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("university_id");
            $table->unsignedBigInteger("center_id");
            $table->timestamps();
            $table->foreign("university_id")->references("id")->on("universities")->cascadeOnDelete();
            $table->foreign("center_id")->references("id")->on("centers")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_center');
    }
};
