<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;
    protected $guarded = [''];



    public function timings(){
        return $this->hasMany(StudentClassDays::class);
    }
    public function teacher()
    {
        return $this->belongsTo(CoordinatorTeacher::class);
    }

}
