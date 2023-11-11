<?php

namespace App\Models\Application;

use App\Models\Application\College;
use App\Models\Application\Material;
use App\Models\Application\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    // Stage table has many to many relationship with college table

    public function colleges()
    {
        return $this->belongsToMany(College::class,"college_stage","stage_id","college_id");
    }

    // Stage table has many to many relationship with material table

    public function materials()
    {
        return $this->belongsToMany(Material::class,"stage_material","stage_id","material_id");
    }

    // Stage table has many to many relationship with course table
    
    public function courses()
    {
        return $this->belongsToMany(Course::class,"stage_course","stage_id","course_id");
    }
}
