<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    protected $fillable =['name','slug','number','course_id'];
    use HasFactory;

    // protected function course(){
    //     return $this->belongsTo(Course::class);
    // }


}
