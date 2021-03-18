@extends('layouts.admin')

@section('page-title', 'Admin Order')

@section('content')
<h1 class="mt-4">Order Management</h1>

<div class="card border-0 shadow mt-5">

    <div class="card-body">
        <h5>Order Details</h5>
        <hr>

        <div class="table-responsive">

            <table class="table">
                <tbody>
                    <tr>
                        <th>No</th>
                        <td>{{$order->id}}</td>
                    </tr>
                    <tr>
                        <th>Client Name</th>
                        <td>{{$order->user->first_name}} {{$order->user->last_name}}</td>
                    </tr>
                    <tr>
                        <th>Package Name</th>
                        <td>{{$order->package->name}}</td>
                    </tr>
                    <tr>
                        <th>Package Quantity</th>
                        <td>{{$order->package_quantity}}</td>
                    </tr>
                    <tr>
                        <th>Package Total Price</th>
                        <td>${{$order->package_total_price}}</td>
                    </tr>
                    <tr>
                        <th>Payment Method</th>
                        <td>{{$order->payment_method}}</td>
                    </tr>
                    <tr>
                        <th>Payer ID</th>
                        <td>{{$order->payer_id ? $order->payer_id : 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Order ID</th>
                        <td>{{$order->order_id ? $order->order_id : 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Payment ID</th>
                        <td>{{$order->payment_id ? $order->payment_id : 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Payment Status</th>
                        <td>{!!$order->payment_status ? '<span class="text-success font-weight-bold">Paid</span>' : '<span class="text-danger font-weight-bold">Unpaid</span>'!!}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection