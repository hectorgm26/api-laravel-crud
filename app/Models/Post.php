<?php

namespace App\Models;

use App\Models\Api;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Api
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'image_path',
        'is_published',
        'published_at',
        'user_id',
        'category_id'
    ];
    
    // Castear es que esos datos se traten como un tipo de dato específico
    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime'
    ];

    public function tags() {
        return $this->belongsToMany(Tag::class)
                    ->withTimestamps(); // para que se guarden los timestamps en la tabla intermedia
    }
    
}
