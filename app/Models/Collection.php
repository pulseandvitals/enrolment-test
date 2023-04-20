<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    use HasUuid;

    protected $fillable = [
        'uuid',
        'title',
        'name',
        'genre',
        'description',
        'is_close',
        'can_comment',
        'user_id',
    ];

    public function collection_files()
    {
        return $this->hasMany(CollectionFile::class,'collection_id');
    }
}
