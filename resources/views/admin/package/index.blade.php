@extends('layouts.admin')

@section('page-title', 'Admin Package')

@section('content')
<h1 class="mt-4">Package</h1>
<div class="card border-0 shadow mt-5">

    <div class="card-body">
        <h5>Package List</h5>
        <hr>

        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($packages) > 0)
                        @foreach($packages as $package)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>
                                <img src="{{asset($package->image)}}" width="100" height="100" alt="{{$package->name}}">
                            </td>
                            <td>{{$package->name}}</td>
                            <td>{{strtoupper($package->type)}}</td>
                            <td>€{{$package->price}}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">No Data found...</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection