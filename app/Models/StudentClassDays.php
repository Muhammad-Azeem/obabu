<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClassDays extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function class(){
        return $this->belongsTo(StudentClass::class);
    }
}
