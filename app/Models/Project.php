<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'image', 'description', 'tech'];

    // PENTING: Casting ini mengubah JSON di database menjadi Array PHP
    protected $casts = [
        'tech' => 'array',
    ];
}
