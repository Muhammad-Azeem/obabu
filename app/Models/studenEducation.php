<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studenEducation extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','school','class'];
}
