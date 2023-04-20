<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'file_url',
        'order',
        'uuid',
        'user_id',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class,'user_id');
    }
}
