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
        Schema::create('accessibilities', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('url')->nullable();
            $table->unsignedTinyInteger('position');
            $table->timestamps();

            $table->unique('position');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessibilities');
    }
};
