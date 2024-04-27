<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subgallary extends Model
{
    use HasFactory;
    protected $fillable=['gallary_id','title','image'];
}
