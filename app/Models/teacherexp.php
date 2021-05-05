<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacherexp extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','school','designation','status'];
}
