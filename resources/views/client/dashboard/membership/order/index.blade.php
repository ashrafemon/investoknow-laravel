@extends('client.dashboard.membership.layouts.membership')

@section('membership-content')
<div class="section">
    {{-- @if(count($unpaid_orders) > 0 || count($paid_orders) > 0) --}}
    @if(count($paid_orders) > 0)
    <div class="card border-muted">
        <div class="card-body py-2">
            <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0"><i class="fa fa-info rounded-circle bg-warning px-2 py-1 text-white"></i> Your Orders are shown below.</p>
                <div>
                    <a href="{{route('client.package.index')}}" class="nav-link">BROWSE PRODUCTS</a>
                </div>
            </div>
        </div>
    </div>


        {{-- @if(count($unpaid_orders) > 0)
        <div class="my-4">
            <h5>Unpaid Orders</h5>
            <div class="row my-3">
                @foreach ($unpaid_orders as $order)
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <a href="" class="nav-link p-0">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="text-center">
                                    <h6>Package Name: {{$order->package->name}}</h6>
                                    <h6 class="mb-0 text-danger">Unpaid</h6>
                                    <p class="mb-0">Package Price: {{$order->package_total_price}}</p>
                                    <p class="mb-0">Package Quantity: {{$order->package_quantity}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif --}}

        @if(count($paid_orders) > 0)
        <div class="my-4">
            {{-- <h5>Paid Orders</h5> --}}
            <div class="row my-3">
                @foreach ($paid_orders as $order)
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <a href="" class="nav-link p-0">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="text-center">
                                    <h6>Package Name: {{$order->package->name}}</h6>
                                    <h6 class="mb-0 text-success">Paid</h6>
                                    <p class="mb-0">Package Price: {{$order->package_total_price}}</p>
                                    <p class="mb-0">Package Quantity: {{$order->package_quantity}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        @endif
    
    @else
    <div class="card border-muted">
        <div class="card-body py-2">
            <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0"><i class="fa fa-info rounded-circle bg-warning px-2 py-1 text-white"></i> No order has been made yet.</p>
                <div>
                    <a href="{{route('client.package.index')}}" class="nav-link">BROWSE PRODUCTS</a>
                </div>
            </div>
        </div>
    </div>
    @endif
    
</div>
@endsection