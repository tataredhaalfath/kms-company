<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'thumbnail',
        'date',
        'description',
        'author',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
