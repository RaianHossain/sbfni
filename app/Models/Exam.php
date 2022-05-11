<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function markInputs()
    {
        return $this->hasMany(MarkInput::class);
    }

    public function gradeCategories()
    {
        return $this->hasMany(GradeCategory::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function markDestributions()
    {
        return $this->hasMany(MarkDestribution::class);
    }

    
}
