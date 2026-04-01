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
        Schema::table('accessibilities', function (Blueprint $table) {
            if (Schema::hasColumn('accessibilities', 'about_description')) {
                $table->dropColumn('about_description');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accessibilities', function (Blueprint $table) {
            if (! Schema::hasColumn('accessibilities', 'about_description')) {
                $table->longText('about_description')->nullable()->after('description');
            }
        });
    }
};
