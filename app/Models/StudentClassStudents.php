<?php

namespace App\Models;

use App\Cars;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClassStudents extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function class(){
        return $this->belongsTo(StudentClass::class,'class_id','id');
    }
    public function student(){
        return $this->belongsTo(User::class,'student_id','id');
    }
}
