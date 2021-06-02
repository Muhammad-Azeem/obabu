<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_session extends Model
{
    use HasFactory;
    protected $fillable = ['starting','ending','status','time','teacher_id'];
}
