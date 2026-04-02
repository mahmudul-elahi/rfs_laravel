<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Tags\HasTags;

class Product extends Model
{
    use HasFactory, HasTags;

    protected $fillable = [
        'image',
        'heading',
        'description',
        'meta_title',
        'meta_description',
        'slug'
    ];


    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($product) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
        });
    }
}
