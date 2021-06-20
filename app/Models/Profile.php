<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable =['name','slug','picture','email','country','phone','about','gender','education','user_id'];
    use HasFactory;
}
