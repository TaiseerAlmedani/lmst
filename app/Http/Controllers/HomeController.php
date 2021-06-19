<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $courses = Course::orderBy('updated_at', 'desc')->limit(3)->get();
       return view('home' , ['courses' => $courses]);
    }
}
