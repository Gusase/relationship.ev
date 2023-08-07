<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;

    protected $fillable = ['birth', 'phone_number', 'parent_name', 'parent_phone', 'guardian_name', 'guardian_phone', 'hobbies', 'achievements', 'notes'];

    protected $casts = [
        'hobbies' => 'array',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
