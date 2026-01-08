<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'image',
        'description',
        'link',
        'tech',
    ];

    protected $casts = [
        'tech' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
