<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $courses = Course::with('tags')->get();
        $tags = Tag::all();

        return view('admin.tags.index', ['courses' => $courses ,'tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');

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
            'name' => 'required|min:3|max:20',
            'slug' => 'required|min:3|max:20',
        ]);

        $tag = Tag::create(['name' => $request->name, 'slug' => $request->slug]);
        $tags = Tag::all();
        return view("admin.tags.index" ,['tags' => $tags]);
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
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit' , ['tag' => $tag]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {


        $request->validate([
            'name' => 'required|min:3|max:20',
            'slug' => 'required|min:3|max:20',
        ]);

        $tag->update($request->all());
        $tags = Tag::all();

        return view("admin.tags.index" ,['tags' => $tags]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        $tags = Tag::all();

        return view("admin.tags.index" ,['tags' => $tags]);

    }
}
