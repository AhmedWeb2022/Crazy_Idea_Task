<?php

namespace App\Models\Application;

use App\Models\Users\Center;
use App\Models\Users\Student;
use App\Models\Users\Teacher;
use App\Models\Application\College;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable=['name',"phone", "location"];

    // University table has many to many relationship with center table

    public function centers()
    {
        return $this->belongsToMany(Center::class,"university_center","university_id","center_id");
    }

    // University table has one to many relationship with college table

    public function colleges()
    {
        return $this->hasMany(College::class);
    }

    // University table has one to many relationship with student table

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // University table has one to many relationship with teacher table

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
