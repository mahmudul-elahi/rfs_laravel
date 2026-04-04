<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Tags\HasTags;

class Project extends Model
{
    use HasFactory, HasTags;

    protected $fillable = [
        'image',
        'title',
        'description',
        'meta_title',
        'meta_description',
        'client_website',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($project) {
            if ($project->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $project->image));
            }
        });
    }
}
