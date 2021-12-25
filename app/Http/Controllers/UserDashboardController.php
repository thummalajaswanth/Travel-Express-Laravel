<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\File;

class UserDashboardController extends Controller
{
    public function myProfile()
    {
        return view('layouts.user.profile');
    }

    public function profileUpdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->mobile = $request->input('mobile');
        $user->alternate_mobile = $request->input('alternate_mobile');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->pincode = $request->input('pincode');

        if ($request->hasfile('image')) {
            $destination = 'uploads/profile/' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/profile/', $filename);
            $user->image = $filename;
        }

        $user->update();
        return redirect('/user/profile');
    }

    public function myBooking()
    {
        $bookings = Booking::where('user_id', '=', Auth::user()->id)->get();
        return view('layouts.user.myBooking', compact('bookings'));
    }
}
