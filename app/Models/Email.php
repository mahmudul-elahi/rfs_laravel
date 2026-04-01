<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    /** @use HasFactory<\Database\Factories\EmailFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'full_name',
        'company_name',
        'email',
        'phone',
        'details',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'is_fav' => 'boolean',
        'read_at' => 'immutable_datetime',
    ];
}
