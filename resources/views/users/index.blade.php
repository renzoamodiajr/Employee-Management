@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <div>
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{session('success_message')}}
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('users.create')}}" class="btn btn-primary float-right">Create User</a>
        </div>
        <div class="card-body">
            <table class="table text-center">
                <thead>
                    <tr>
                    <th scope="col">First name</th>
                    <th scope="col">Middle name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col"><i class="fas fa-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td style="text-transform:capitalize;">
                                {{$user->first_name}}
                            </td>
                            <td style="text-transform:capitalize;">
                                {{$user->middle_name}}
                            </td>
                            <td style="text-transform:capitalize;">
                                {{$user->last_name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                <div class="dropdown">
                                <a class="btn" href="#" role="button" id="userSettings" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="userSettings">
                                    <li><a class="dropdown-item" href="{{route('users.edit', $user->id)}}"><i class="fas fa-edit text-gray-400 mr-2"></i> Edit</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-trash text-gray-400 mr-2"></i> Delete</a></li>
                                </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection