<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
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


        $subject = Subject::create($request->all());

        Session::flash('message', 'Successfully created new Subject!');
        $subject->save();
        return redirect('/admin/subjects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.edit', compact('subject'));
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
        $subject = Subject::findOrFail($id);

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

        $subject->update($request->all());

        Session::flash('message', 'Successfully updated Subject!');
        $subject->save();
        return redirect('/admin/subjects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);

        if ($subject->lessons()->count() > 0) {
            Session::flash('message', 'You cannot delete a subject in use!');
            return redirect('/admin/subjects');
        } else {

            $subject->delete();
            Session::flash('flash', 'Subject Deleted');
            return redirect('/admin/subjects');
        }
    }
}
