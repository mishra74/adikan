<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enquiry extends Model
{
    use HasFactory;
    protected $fillable=['firstname', 'lastname', 'course', 'email', 'phone', 'msg',];
}
