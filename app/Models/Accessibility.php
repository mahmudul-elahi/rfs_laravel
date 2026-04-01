<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessibility extends Model
{
    /** @use HasFactory<\Database\Factories\AccessibilityFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'position',
    ];
}
