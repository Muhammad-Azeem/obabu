<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoordinatorTeacher extends Model
{
    use HasFactory;

    protected $fillable = ['coordinator_id', 'teacher_id'];

    public function user()
    {
        return $this->hasMany(User::class,'id','coordinator_id');
    }
}
