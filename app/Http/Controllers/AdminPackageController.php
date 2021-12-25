<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class AdminPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = new Package;
        $packages = $packages::all();
        return view('layouts.admin.packages', compact('packages'));
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

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'places_covered' => 'required',
        ]);

        $packages = new Package;
        $packages->name = $request->input('name');
        $packages->description = $request->input('description');
        $packages->price = $request->input('price');
        $packages->places_covered = $request->input('places_covered');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $fileName = $extension;
            $file->move('images/package-images', $fileName);
            $packages->image = $fileName;
        } else {
            return $request;
            $packages->image = '';
        }
        $packages->save();

        return redirect('/admin/package')->with('success', 'Package Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $package = array(
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'places_covered' => $request->places_covered,
        );

        Package::findOrFail($request->package_id)->update($package);

        return redirect('/admin/package')->with('success', 'package Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('/admin/package');
    }
}
