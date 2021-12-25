<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new User;
        $users = $user::all();
        return view('layouts.admin.adminDashboard', compact('users'));
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
        $users = User::where('name', 'LIKE', '%' . $search . '%')->get();
        return view('layouts.admin.adminDashboard', compact('users'));
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
            'fname' => 'required',
            'lname' => 'required',
            'name' => 'required',
            'email' => 'required',
            'role_as' => 'required',
            'password' => 'required',
        ]);

        $password = Hash::make($request->input('password'));

        $users = new User;
        $users->fname = $request->input('fname');
        $users->lname = $request->input('lname');
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->role_as = $request->input('role_as');
        $users->password = $password;

        $users->save();

        return redirect('/admin')->with('success', 'User Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = array(
            'fname' => $request->fname,
            'lname' => $request->lname,
            'name' => $request->name,
            'role_as' => $request->role_as,
            'email' => $request->email,
        );

        User::findOrFail($request->user_id)->update($user);
        return redirect('/admin')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin');
    }
}
