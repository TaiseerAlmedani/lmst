<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $categories = Category::all();

        return view('admin.courses.index' ,['courses' => $courses , 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories =Category::all();
        return view('admin.courses.create' , ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'              => 'required|min:3|max:30',
            'slug'              => 'required|min:3|max:30',
            'course_img'        => 'required',
            'hours'             =>'required|numeric',
            'teacher_name'      => 'required|min:3|max:30',
            'teacher_img'       => 'required',
            'outline'           => 'required|min:30|max:60',
            'price'             => 'required|numeric|',
            'description'       => 'required|min:30|max:100',
            'category_id'       => 'required',
        ]);

        $course = Course::create([
            'name'          => $request->name ,
            'slug'          => $request->slug,
            'course_img'    => $request->course_img,
            'teacher_img'   => $request->teacher_img ,
            'teacher_name'   => $request->teacher_name ,
            'outline'       => $request->outline ,
            'price'         => $request->price ,
            'description'   => $request->description ,
            'category_id'   => $request->category_id ,
            'rate'          => '0',
            'hours'         => $request->hours,
        ]);

        return view('admin.home');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('admin.courses.edit' , ['course' => $course , 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name'              => 'required|min:3|max:30',
            'slug'              => 'required|min:3|max:30',
            'course_img'        => 'required|url',
            'teacher_name'      => 'required|min:3|max:30',
            'teacher_img'       => 'required|url',
            'hours'             =>'required|numeric',
            'outline'           => 'required|min:30|max:60',
            'price'             => 'required|numeric|',
            'description'       => 'required|min:30|max:100',
            'category_id'       => 'required',
        ]);

        $course->update($request->all());
        $courses = Course::all();

        return view('admin.courses.index' , ['courses' => $courses]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        $courses = Course::all();

        return view('admin.courses.index' ,['courses' => $courses] );
    }
}
