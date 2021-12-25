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
                    <a href="/admin/user"
                        class="list-group-item list-group-item-action list-group-item-info active">Users</a>
                    <a href="/admin/tour" class="list-group-item list-group-item-action list-group-item-info">Tours</a>
                    <a href="/admin/package"
                        class="list-group-item list-group-item-action list-group-item-info">Packages</a>
                    <a href="/booking" class="list-group-item list-group-item-action list-group-item-info">Bookings</a>
                    <a href="/admin/my-booking" class="list-group-item list-group-item-action list-group-item-info">My
                        Bookings</a>
                    <a href="/admin/profile" class="list-group-item list-group-item-action list-group-item-info">Account</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-2">
                        @include('layouts.admin.addUsers')
                    </div>
                    <div class="col-md-4 offset-md-6">
                        <form action="/search" method="get">
                            <div class="input-group mb-3">
                                <input type="search" class="form-control" name="search" placeholder="Search"
                                    autocomplete="off">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-info" type="button"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Firstname</th>
                                        <th scope="col">Lastname</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role_as</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->fname }}</td>
                                            <td>{{ $user->lname }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role_as }}</td>
                                            <td>
                                                @include('layouts.admin.editUser')
                                            </td>
                                            <td>
                                                <form method="POST" action="/admin/user/{{ $user->id }}">
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
