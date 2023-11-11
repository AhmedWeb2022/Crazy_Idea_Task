<?php

namespace App\Models\Users;

use App\Models\Application\College;
use App\Models\Application\Course;
use App\Models\Application\University;
use App\Models\Users\Center;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=['name',"phone","academic","basic","age"];

    // Student table has one to many relationship with center table

    public function Center()
    {
        return $this->belongsTo(Center::class);
    }

    // Student table has one to many relationship with university table

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    // Student table has one to many relationship with college table

    public function college()
    {
        return $this->belongsTo(College::class);
    }

    // Student table has many to many relationship with course table

    public function courses()
    {
        return $this->belongsToMany(Course::class,"course_student","student_id","course_id");
    }
}
