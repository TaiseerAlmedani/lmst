<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable =[
        'name',
        'slug',
        'course_img',
        'teacher_name',
        'teacher_img',
        'price',
        'description',
        'rate',
        'category_id',
        'hours'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('activation');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
