@extends('layouts.admin')

@section('page-title', 'Admin Order')

@section('content')
<h1 class="mt-4">Order Management</h1>

<div class="card border-0 shadow mt-5">

    <div class="card-body">
        <h5 class="text-success font-weight-bold">Paid Order</h5>
        <hr>

        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Package</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($paid_orders) > 0)
                        @foreach($paid_orders as $order)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$order->user->first_name}} {{$order->user->last_name}}</td>
                            <td>{{$order->package->name}}</td>
                            <td>{{$order->package_quantity}}</td>
                            <td>€{{$order->package_total_price}}</td>
                            <td>
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{route('admin.order.show', $order->id)}}" class="btn btn-info btn-sm mr-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form action="{{route('admin.order.delete', $order->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                
                                {{-- <a href="" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>  --}}
                                
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

<div class="card border-0 shadow mt-5">

    <div class="card-body">
        <h5 class="text-danger font-weight-bold">Unpaid Order</h5>
        <hr>

        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Package</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($unpaid_orders) > 0)
                        @foreach($unpaid_orders as $order)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$order->user->first_name}} {{$order->user->last_name}}</td>
                            <td>{{$order->package->name}}</td>
                            <td>{{$order->package_quantity}}</td>
                            <td>€{{$order->package_total_price}}</td>
                            <td>
                                
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{route('admin.order.show', $order->id)}}" class="btn btn-info btn-sm mr-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form action="{{route('admin.order.delete', $order->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
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