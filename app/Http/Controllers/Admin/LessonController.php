<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        return view('admin.lessons.index' , ['lessons' => $lessons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view('admin.lessons.create' , ['sections' => $sections]);
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
            'name' => 'required|url',
            'slug' => 'required|min:3',
            'type' => 'required',
            'section_id' => 'required',
        ]);

        $lesson = Lesson::create([
            'name'          => $request->name ,
            'slug'          => $request->slug,
            'type'          => $request->type,
            'section_id'          => $request->section_id,

        ]);

        return view('admin.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        $sections = Section::all();
        return view('admin.lessons.edit' , ['lesson' => $lesson,'sections' => $sections]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $request->validate([
            'name' => 'required|url',
            'slug' => 'required|min:3',
            'type' => 'required',
            'section_id' => 'required',
        ]);

        $lesson->update($request->all());
        $lessons = Lesson::all();
        return view('admin.lessons.index' , ['lessons' => $lessons  ] );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        $lessons = Lesson::all();
        return view('admin.lessons.index' , ['lessons' => $lessons]);
    }
}
