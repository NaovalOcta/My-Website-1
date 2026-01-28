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
        'github_link',
        'design_link',
        'features',
        'role',
        'project_type',
        'year',
        'team',
        'timeline',
    ];

    protected $casts = [
        'tech' => 'array',
        'features' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function galleries()
    {
        return $this->hasMany(ProjectGallery::class);
    }
}
