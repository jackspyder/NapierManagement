<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venues = Venue::all();
        return view('venues.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'max:80|required',
            'address' => 'max:60|required',
            'city' => 'required',
            'post_code' => 'required',
            'location' => 'required',
            'image' => 'nullable'
        ]);


        $venue = Venue::create($request->all());

        Session::flash('message', 'Successfully created Venue!');
        $venue->save();
        return redirect('/admin/venues');
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
        return view('venues.show', compact('venue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venue = Venue::findOrFail($id);

        return view('venues.edit', compact('venue'));
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
        $venue = Venue::findOrFail($id);

        $this->validate(request(), [
            'name' => 'max:80|required',
            'address' => 'max:60|required',
            'city' => 'required',
            'post_code' => 'required',
            'location' => 'required',
            'image' => 'nullable'
        ]);

        $venue->update($request->all());
        $venue->save();
        Session::flash('message', 'Successfully updated Venue!');

        return redirect('/admin/venues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $venue = Venue::findOrFail($id);

        if($venue->lessons()->count() > 0){
            Session::flash('message', 'You cannot delete a venue in use!');
            return redirect('/admin/venues');
        }else{

            $venue->delete();
            Session::flash('message', 'Venue Deleted');
            return redirect('/admin/venues');
        }

    }
}
