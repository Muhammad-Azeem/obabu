<?php

namespace App\Models;

use App\Cars;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClassStudents extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function user(){
        return $this->hasOne(User::class,'user_id','id');
    }
}
