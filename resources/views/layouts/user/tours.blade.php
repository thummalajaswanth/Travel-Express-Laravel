@extends('layouts.partials.master')
@section('title')
    Tavel Express | Tours
@endsection

@section('content')
    @include('layouts.partials.navbar')
    @include('layouts.partials.toursSection')
    @include('layouts.partials.packageSection')
    @include('layouts.partials.footer')
@endsection
