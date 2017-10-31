<?php

namespace App\Http\Controllers;
use App\Models\Subject;

use Illuminate\Http\Request;

class PSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('public.subjects.index', compact('subjects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        return view('public.subjects.show', compact('subject'));
    }
}
