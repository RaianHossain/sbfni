<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentCourse extends Model
{
    use HasFactory;
    protected $table = "currentcourses";
    protected $guarded = [];
}
