<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function markDestributions()
    {
        return $this->hasMany(MarkDestribution::class);
    }

    
}
