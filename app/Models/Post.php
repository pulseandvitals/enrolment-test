<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
        'name',
    ];

    public function comments()
    {
        return $this->HasMany(Comment::class,'parent_post_id');
    }
}
