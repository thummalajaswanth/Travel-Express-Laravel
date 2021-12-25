@extends('layouts.partials.master')
@section('title')
    Tavel Express | Bookings
@endsection

@section('content')
    @include('layouts.partials.navbar')
    <div class="bg">
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-4">
                    @include('layouts.partials.bookingForm')
                </section>
            </section>
        </section>
    </div>
@endsection
