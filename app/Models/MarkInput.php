<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkInput extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function year()
    {
        return $this->belongsTo('App\Models\Year');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function exam()
    {
        return $this->belongsTo('App\Models\Exam');
    }

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade');
    }

    public function gradeCategory()
    {
        return $this->belongsTo('App\Models\GradeCategory');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function markDestribution()
    {
        return $this->belongsTo('App\Models\MarkDestribution');
    }


}
