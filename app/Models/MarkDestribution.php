<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkDestribution extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function markInput()
    {
        return $this->belongsTo(MarkInput::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function gradeCategory()
    {
        return $this->belongsTo(GradeCategory::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    
}
