<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;
    protected $table = "courseregistrations";
    protected $guarded = [];

    public function currentcourse(){ //inverse relation
        return $this->belongsTo(CurrentCourse::class, "currentcourse_id");
    }


}
