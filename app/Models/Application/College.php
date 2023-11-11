<?php

namespace App\Models\Application;

use App\Models\Application\Stage;
use App\Models\Application\Course;
use App\Models\Users\Student;
use App\Models\Users\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = ['name', "phone", "location"];

    // College table has many to many relationship with stage table

    public function stages()
    {
        return $this->belongsToMany(Stage::class, "college_stage", "college_id", "stage_id");
    }

    // College table has many to many relationship with course table

    public function courses()
    {
        return $this->belongsToMany(Course::class, "college_course", "college_id", "course_id");
    }

    // College table has one to many relationship with student table

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // College table has one to many relationship with teacher table

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    // College table has one to many relationship with university table

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
