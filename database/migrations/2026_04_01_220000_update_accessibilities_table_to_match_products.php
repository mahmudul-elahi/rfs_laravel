<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('accessibilities', function (Blueprint $table) {
            $table->string('image')->nullable()->after('id');
            $table->text('heading')->nullable()->after('image');
            $table->longText('description')->nullable()->after('heading');
            $table->string('meta_title')->nullable()->after('description');
            $table->longText('meta_description')->nullable()->after('meta_title');
            $table->string('slug')->nullable()->unique()->after('meta_description');
        });

        $rows = DB::table('accessibilities')
            ->select('id', 'title')
            ->get();

        foreach ($rows as $row) {
            $baseSlug = Str::slug($row->title ?: 'accessibility-' . $row->id, '-', null);
            $slug = $baseSlug !== '' ? $baseSlug : 'accessibility-' . $row->id;
            $originalSlug = $slug;
            $counter = 1;

            while (
                DB::table('accessibilities')
                    ->where('slug', $slug)
                    ->where('id', '!=', $row->id)
                    ->exists()
            ) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            DB::table('accessibilities')
                ->where('id', $row->id)
                ->update([
                    'heading' => $row->title,
                    'description' => $row->title,
                    'slug' => $slug,
                ]);
        }

        Schema::table('accessibilities', function (Blueprint $table) {
            $table->dropUnique(['position']);
            $table->dropColumn(['title', 'url', 'position']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accessibilities', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn([
                'image',
                'heading',
                'description',
                'meta_title',
                'meta_description',
                'slug',
            ]);

            $table->text('title');
            $table->string('url')->nullable();
            $table->unsignedTinyInteger('position')->unique();
        });
    }
};
