<?php

namespace App\Http\Controllers;

use App\Models\Subject;
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
        return view('lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::pluck('title', 'id');
        $venues = Venue::pluck('name', 'id');
        return view('lessons.create', compact('venues', 'subjects'));
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
        $lesson->subject_id = $request['subject_id'];
        $lesson->venue_id = $request['venue_id'];

        $lesson->save();

        Session::flash('success', 'Successfully created Lesson!');

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

        $subjects = Subject::pluck('title', 'id');
        $venues = Venue::pluck('name', 'id');

        return view('lessons.edit', compact('lesson','venues', 'subjects'));


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

        $lesson->subject_id = $request['subject_id'];
        $lesson->venue_id = $request['venue_id'];

        $lesson->save();

        Session::flash('success', 'Successfully updated Class!');

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
            Session::flash('warning', 'You cannot delete a Class in use!');
            return redirect()->back();
        } else {

            $lesson->delete();
            Session::flash('success', 'Class Deleted!');
            return redirect('/admin/lessons');
        }
    }
}
