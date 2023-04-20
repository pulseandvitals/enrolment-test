<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'file_url',
        'collection_id',
        'order',
        'uuid',
        'user_id',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class,'user_id');
    }
}
