<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Collection;
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
        $users = 0; //this is to initialise the count on the view, dont delete it.

        return view('subjects.index', compact('subjects', 'users'));
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
            'summary' => 'required',
            'description' => 'required',
        ]);


        $subject = Subject::create($request->all());

        Session::flash('success', 'Successfully created new Subject!');
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

        $venues = new Collection();

        foreach($subject->lessons as $lesson){
            $temp = Venue::findorFail($lesson->venue_id);

            $venues->push($temp);
        }

        return view('subjects.show', compact('subject', 'venues'));
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
            'summary' => 'required',
            'description' => 'required',

        ]);

        $subject->update($request->all());

        Session::flash('success', 'Successfully updated Subject!');
        $subject->save();
        return redirect()->back();
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
            Session::flash('warning', 'You cannot delete a subject in use!');
            return redirect()->back();
        } else {

            $subject->delete();
            Session::flash('success', 'Subject Deleted!');
            return redirect('/admin/subjects');
        }
    }
}
