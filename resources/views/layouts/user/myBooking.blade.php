@extends('layouts.partials.master')
@section('title')
    Tavel Express | UserDashboard
@endsection

@section('content')
    @include('layouts.partials.navbar')
    <div class="container-fluid mt-3 mb-5">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group list-group-flush bg-dark">
                    <h3 class="text-white text-center text-uppercase">Dashboard</h3>
                    <a href="/user/my-booking" class="list-group-item list-group-item-action list-group-item-info active">My
                        Bookings</a>
                    <a href="/user/profile" class="list-group-item list-group-item-action list-group-item-info">Account</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($bookings as $booking)
                            <div class="card text-white {{ $booking->status }} mb-2" style="width: 25rem;" id="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <span class="material-icons">
                                            place
                                        </span>{{ $booking->trip_name }}
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><span>Booking Id: </span>{{ $booking->booking_id }}</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><span>No of Persons: </span>{{ $booking->persons }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><span>Price: </span>{{ $booking->price }}</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><span>Journey Date: </span>{{ $booking->journey_date }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Status: {{ $booking->status }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')
@endsection
