<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'phone', 'applyfor', 'resume', 'city', 'zip', 'details'];
}
