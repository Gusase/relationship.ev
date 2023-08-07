<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    public function profile()
    {
        return $this->hasOne(StudentProfile::class, 'student_id');
    }

    public function studentClasses()
    {
        return $this->belongsTo(StudentClass::class, 'class_id', 'id');
    }
}
