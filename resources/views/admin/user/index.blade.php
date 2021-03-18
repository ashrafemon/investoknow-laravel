@extends('layouts.admin')

@section('page-title', 'Admin User Management')

@section('content')
<h1 class="mt-4">User Management</h1>
<div class="card border-0 shadow mt-5">

    <div class="card-body">
        <h5>User List</h5>
        <hr>

        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$user->first_name}} {{$user->last_name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <!-- <a href="" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a> -->
                                @if(Auth::user()->type == "admin")
                                <button class="btn btn-danger btn-sm disabled">
                                    <i class="fas fa-trash"></i>
                                </button>
                                @else
                                <form action="{{route('admin.user.delete', $user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                @endif
                                
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Data found...</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection