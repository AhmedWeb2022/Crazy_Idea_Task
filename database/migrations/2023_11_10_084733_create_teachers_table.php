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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("age");
            $table->string("phone");
            $table->foreignId("center_id")->constrained("centers")->cascadeOnDelete();
            $table->foreignId("university_id")->constrained("universities")->cascadeOnDelete();
            $table->foreignId("college_id")->constrained("colleges")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
