<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class AdminTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour = new Tour;
        $tours = $tour::all();
        return view('layouts.admin.tours', compact('tours'));
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

    public function search(Request $request)
    {
        $search = $request->get('search');
        $tours = Tour::where('name', 'LIKE', '%' . $search . '%')->get();
        return view('layouts.admin.tours', compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'places_covered' => 'required',
        ]);

        $tours = new Tour;
        $tours->name = $request->input('name');
        $tours->description = $request->input('description');
        $tours->price = $request->input('price');
        $tours->places_covered = $request->input('places_covered');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $fileName = $extension;
            $file->move('images/tour-package-images', $fileName);
            $tours->image = $fileName;
        } else {
            return $request;
            $tours->image = '';
        }
        $tours->save();

        return redirect('/admin/tour')->with('success', 'Tour Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tour = array(
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'places_covered' => $request->places_covered,
        );

        Tour::findOrFail($request->tour_id)->update($tour);

        return redirect('/admin/tour')->with('success', 'Tour Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect('/admin/tour');
    }
}
