<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Session;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'price' => 'numeric|required',
            'duration' => 'integer|required',
            'title' => 'required',
            'qualification' => 'required',
            'awarded_by' => 'required',
            'overview' => 'required',
            'description' => 'required',
            'who_for' => 'required',
            'requirements' => 'required',
            'career_path' => 'required'
        ]);


        $course = Course::create($request->all());

        Session::flash('message', 'Successfully created Course!');
        $course->save();
        return redirect('/admin/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $this->validate(request(), [
            'price' => 'numeric|required',
            'duration' => 'integer|required',
            'title' => 'required',
            'qualification' => 'required',
            'awarded_by' => 'required',
            'overview' => 'required',
            'description' => 'required',
            'who_for' => 'required',
            'requirements' => 'required',
            'career_path' => 'required'
        ]);

        $course->update($request->all());

        Session::flash('message', 'Successfully updated Course!');
        $course->save();
        return redirect('/admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        if ($course->lessons()->count() > 0) {
            Session::flash('message', 'You cannot delete a course in use!');
            return redirect('/admin/courses');
        } else {

            $course->delete();
            Session::flash('flash', 'Course Deleted');
            return redirect('/admin/courses');
        }
    }
}
