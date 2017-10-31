<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        $venues = Venue::all();
        $courses = Course::all();
        return view('lessons.index', compact('lessons', 'venues', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::pluck('title', 'id');
        $venues = Venue::pluck('name', 'id');
        return view('lessons.create', compact('venues', 'courses'));
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
            'start_date' => 'required|date|after:tomorrow',
            'capacity' => 'required',
        ]);

        $lesson = new Lesson;

        $lesson->spaces_left = $request['capacity'];
        $lesson->start_date = $request['start_date'];
        $lesson->capacity = $request['capacity'];
        $lesson->course_id = $request['course_id'];
        $lesson->venue_id = $request['venue_id'];

        $lesson->save();

        Session::flash('message', 'Successfully created Lesson!');

        return redirect('/admin/lessons');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.show', compact('lesson'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);

        $courses = Course::pluck('title', 'id');
        $venues = Venue::pluck('name', 'id');

        return view('lessons.edit', compact('lesson','venues', 'courses'));


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

        $request->validate([
            'start_date' => 'required|date|after:tomorrow',
            'capacity' => 'required',
        ]);

        $lesson = Lesson::findOrFail($id);

        $lesson->capacity = $request['capacity'];
        $lesson->spaces_left = $request['capacity'] - $lesson->users()->count();
        $lesson->start_date = $request['start_date'];

        $lesson->course_id = $request['course_id'];
        $lesson->venue_id = $request['venue_id'];

        $lesson->save();

        Session::flash('message', 'Successfully updated Lesson!');

        return redirect('/admin/lessons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);

        if ($lesson->users()->count() > 0) {
            Session::flash('message', 'You cannot delete a class in use!');
            return redirect('/admin/lessons');
        } else {

            $lesson->delete();
            Session::flash('flash', 'Class Deleted');
            return redirect('/admin/lessons');
        }
    }
}
