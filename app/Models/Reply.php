<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable = [
        'reply',
        'user_id',
        'parent_post_id',
        'comment_id'
    ];
    public function comments()
    {
        return $this->belongsTo(Comment::class,'comment_id');
    }
}
