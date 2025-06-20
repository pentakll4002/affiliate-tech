<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Article.php
public function interactions()
{
    return $this->hasMany(ArticleInteraction::class);
}

public function likes()
{
    return $this->interactions()->where('type', 'like');
}

public function dislikes()
{
    return $this->interactions()->where('type', 'dislike');
}

public function shares()
{
    return $this->interactions()->where('type', 'share');
}
}
