<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use HasUuid;

    protected $fillable = [
        'code',
        'gpa_requirement',
        'isOpen',
        'student_capacity',
        'name',
        'user_id',
        'uuid',
        'image',
        'requires_scholarship'
    ];
}
