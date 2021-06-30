<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseDetails;
use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseDetails  $courseDetails
     * @return \Illuminate\Http\Response
     */
    public function show(Course $courseDetails)
    {


        $section = Section::all();
        $lessons = Lesson::all();

        return view('courses.show' ,
            ['course' => $courseDetails ,
            'section' => $section ,
            'lessons' => $lessons
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseDetails  $courseDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseDetails $courseDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseDetails  $courseDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseDetails $courseDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseDetails  $courseDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseDetails $courseDetails)
    {
        //
    }
}
