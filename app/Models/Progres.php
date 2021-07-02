<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    protected $fillable  =['user_id','lesson_id','done'];
    use HasFactory;
}
