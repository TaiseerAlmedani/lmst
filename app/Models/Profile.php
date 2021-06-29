<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable =[
        'name',
        'slug',
        'picture',
        'email',
        'country',
        'phone',
        'about',
        'gender',
        'education',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
