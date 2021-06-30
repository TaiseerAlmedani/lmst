<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('enroll.index');
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
        // // dd($request->all());
        // if ($request->course_id  and $request->user_id) {
        //     return view('enroll.show');
        // }
        // else {
        //     $request->validate([

        //         'course_id' => 'required|numeric',
        //         'user_id'   => 'numeric|required',
        //     ]);


        //     $enroll = Enroll::create([
        //         'course_id' => $request->course_id,
        //         'user_id' => $request->user_id,

        //     ]);

        //     return view('enroll.show');
        // }


        $request->validate([

            'course_id' => 'required|numeric',
            'user_id'   => 'numeric|required',
        ]);


        $enroll = Enroll::create([
            'course_id' => $request->course_id,
            'user_id' => $request->user_id,

        ]);

        return view('enroll.show');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('enroll.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
