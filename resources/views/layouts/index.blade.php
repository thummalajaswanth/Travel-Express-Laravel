@extends('layouts.partials.master')

@section('title')
    Travel Express | Home
@endsection

@section('content')
    @include('layouts.partials.navbar')
    @include('layouts.partials.carousel')
    @include('layouts.partials.tourPackages')
    @include('layouts.partials.testimonials')
    @include('layouts.partials.footer')
@endsection
