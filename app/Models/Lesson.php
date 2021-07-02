<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    protected $fillable =['name','slug','type','section_id'];
    use HasFactory;

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function users(){
        return $this->belongsToMany(User::class)->withPivot('done');
    }
}
