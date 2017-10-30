<?php

namespace App\Http\Controllers;


use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PVenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venues = Venue::all();
        return view('public.venues.index', compact('venues'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venue = Venue::findOrFail($id);
        return view('public.venues.show', compact('venue'));
    }
}
