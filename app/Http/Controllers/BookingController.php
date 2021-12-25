<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = new Booking;
        $bookings = $bookings::all();
        return view('layouts.admin.adminBooking', compact('bookings'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $bookings = Booking::where('user_id', '=', $search)->get();
        return view('layouts.admin.adminBooking', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $user_id = Auth::user()->id;
        $trip_name = $request->name;
        $price = $request->price;
        $tour_id = $request->tour_id;
        $package_id = $request->package_id;

        return view('layouts.user.booking')->with('trip_name', $trip_name)->with('price', $price)->with('tour_id', $tour_id)->with('package_id', $package_id);
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
            'trip_name' => 'required',
            'persons' => 'required',
            'mobile' => 'required',
            'price' => 'required',
            'journey_date' => 'required',
            // 'tour_id' => 'required',
            // 'package_id' => 'required',
            'user_id' => 'required',
        ]);
        $price = $request->persons * $request->price;
        $booking = new Booking;
        $booking->trip_name = $request->trip_name;
        $booking->persons = $request->persons;
        $booking->price = $price;
        $booking->mobile = $request->mobile;
        $booking->journey_date = $request->journey_date;
        $booking->trip_id = $request->tour_id;
        $booking->package_id = $request->package_id;
        $booking->user_id = $request->user_id;
        $booking->save();
        if (Auth::user()->role_as == "admin") {
            return redirect('/admin/profile');
        } else {
            return redirect('/user/profile');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $booking = array(
            'status' => $request->status,
        );

        Booking::findOrFail($request->booking_id)->update($booking);
        return redirect('/admin')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
