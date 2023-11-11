<?php

namespace App\Models\Users;

use App\Models\Application\University;
use App\Models\Users\Student;
use App\Models\Users\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    protected $fillable=['name',"phone"];

    // Center table has many to many relationship with university table

    public function universities()
    {
        return $this->belongsToMany(University::class,"university_center","center_id","university_id");
    }

    // Center table has one to many relationship with student table

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // Center table has one to many relationship with teacher table

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
