<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'parent_post_id',
    ];

    public function post_lists()
    {
        return $this->belongsTo(Post::class,'parent_post_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function replies()
    {
        return $this->HasMany(Reply::class,'comment_id');
    }
}
