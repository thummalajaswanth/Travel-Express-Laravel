@extends('layouts.partials.master')
@section('title')
    Tavel Express | Admin Dashboard
@endsection

@section('content')
    @include('layouts.partials.navbar')
    <div class="container-fluid mt-3 mb-5">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group list-group-flush bg-dark">
                    <h3 class="text-white text-center text-uppercase">Dashboard</h3>
                    <a href="/admin/user" class="list-group-item list-group-item-action list-group-item-info">Users</a>
                    <a href="/admin/tour" class="list-group-item list-group-item-action list-group-item-info">Tours</a>
                    <a href="/admin/package"
                        class="list-group-item list-group-item-action list-group-item-info active">Packages</a>
                    <a href="/booking" class="list-group-item list-group-item-action list-group-item-info">Bookings</a>
                    <a href="/admin/my-booking" class="list-group-item list-group-item-action list-group-item-info">My
                        Bookings</a>
                    <a href="/admin/profile" class="list-group-item list-group-item-action list-group-item-info">Account</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-2 mb-1">
                        @include('layouts.admin.addPackages')
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Places Covered</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>{{ $package->p_id }}</td>
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $package->description }}</td>
                                            <td>{{ $package->places_covered }}</td>
                                            <td>{{ $package->price }}</td>
                                            <td>
                                                @include('layouts.admin.editPackages')
                                            </td>
                                            <td>
                                                <form method="POST" action="/admin/package/{{ $package->p_id }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')
@endsection
