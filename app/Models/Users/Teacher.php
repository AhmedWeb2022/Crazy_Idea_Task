<?php

namespace App\Models\Users;

use App\Models\Application\Course;
use App\Models\Application\University;
use App\Models\Application\college;
use App\Models\Users\Center;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', "phone", "age"];

    // Teacher table has one to many relationship with center table

    public function Center()
    {
        return $this->belongsTo(Center::class);
    }

    // Teacher table has one to many relationship with university table

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    // Teacher table has one to many relationship with college table

    public function college()
    {
        return $this->belongsTo(college::class);
    }

    // Teacher table has many to many relationship with course table

    public function courses()
    {
        return $this->belongsToMany(Course::class, "course_teacher", "teacher_id", "course_id");
    }
}
