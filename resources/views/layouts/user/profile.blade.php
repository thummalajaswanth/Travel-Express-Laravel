@extends('layouts.partials.master')

@section('title')
    Travel Express | Profile
@endsection

@section('content')
    @include('layouts.partials.navbar')
    <div class="container-fluid mt-3 mb-5">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group list-group-flush bg-dark">
                    <h3 class="text-white text-center text-uppercase">Dashboard</h3>
                    <a href="/user/my-booking" class="list-group-item list-group-item-action list-group-item-info">My
                        Bookings</a>
                    <a href="/user/profile"
                        class="list-group-item list-group-item-action list-group-item-info active">Account</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center text-uppercase text-white bg-dark p-3">My Profile Page</h3>

                        <form action="{{ url('/user/profile-update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ asset('uploads/profile/' . Auth::user()->image) }}"
                                                class="w-50 ml-5" alt="profile-image">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="file-upload p-2">
                                                <input type="file" name="image">
                                                <span>
                                                    <span class="material-icons">
                                                        add_photo_alternate
                                                    </span>
                                                    Choose a Image
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input type="text" name="fname" class="form-control"
                                                    value="{{ Auth::user()->fname }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" name="lname" class="form-control"
                                                    value="{{ Auth::user()->lname }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Gender</label>
                                                <input name="gender" type="text" class="form-control"
                                                    value="{{ Auth::user()->gender }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Mobile</label>
                                                <input type="number" name="mobile" class="form-control"
                                                    value="{{ Auth::user()->mobile }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Alternate Mobile (Optional)</label>
                                                <input type="number" name="alternate_mobile" class="form-control"
                                                    value="{{ Auth::user()->alternate_mobile }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Email Id</label>
                                        <input type="email" name="email" class="form-control" readonly
                                            value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{ Auth::user()->address }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">City</label>
                                        <input type="text" name="city" class="form-control"
                                            value="{{ Auth::user()->city }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Pincode</label>
                                        <input type="number" name="pincode" class="form-control"
                                            value="{{ Auth::user()->pincode }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-md-10 col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Save</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')
@endsection
