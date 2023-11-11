<?php

namespace App\Models\Application;

use App\Models\Application\College;
use App\Models\Application\Stage;
use App\Models\Application\Material;
use App\Models\Users\Student;
use App\Models\Users\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=['name',"academic", "basic","paid"];

    // Course table has many to many relationship with college table

    public function colleges()
    {
        return $this->belongsToMany(College::class,"college_course","course_id","college_id");
    }

    // Course table has many to many relationship with stage table

    public function stages()
    {
        return $this->belongsToMany(Stage::class,"stage_course","course_id","stage_id");
    }

    // Course table has many to many relationship with student table

    public function students()
    {
        return $this->belongsToMany(Student::class,"course_student","course_id","student_id");
    }

    // Course table has many to many relationship with teacher table

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,"course_teacher","course_id","teacher_id");
    }

    // Course table has one to many relationship with material table
    
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
