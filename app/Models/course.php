<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable=['course_name', 'startOn', 'time', 'totalDayInWeek', 'CourseDuration', 'mode', 'status'];
}
