<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Tags\HasTags;

class Accessibility extends Model
{
    /** @use HasFactory<\Database\Factories\AccessibilityFactory> */
    use HasFactory, HasTags;

    protected $fillable = [
        'image',
        'heading',
        'description',
        'meta_title',
        'meta_description',
        'slug',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($accessibility) {
            if (! $accessibility->image) {
                return;
            }

            $imagePath = str_starts_with($accessibility->image, 'storage/')
                ? substr($accessibility->image, 8)
                : $accessibility->image;

            Storage::disk('public')->delete($imagePath);
        });
    }
}
