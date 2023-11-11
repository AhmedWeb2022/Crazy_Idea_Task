<?php

namespace App\Models\Application;

use App\Models\Application\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable=['name',"academic", "basic"];

    // Material table has one to many relationship with course table

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Material table has many to many relationship with stage table

    public function stages()
    {
        return $this->belongsToMany(Stage::class,"stage_material","material_id","stage_id");
    }
}
