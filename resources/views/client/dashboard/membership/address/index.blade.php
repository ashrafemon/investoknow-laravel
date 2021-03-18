@extends('client.dashboard.membership.layouts.membership')

@section('membership-content')
<div class="section">
    <p>The following addresses will be used on the checkout page by default.</p>

    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-4">
            <div class="card border-muted">
                <div class="card-body">
                    <div class="text-center">
                        <h3>Billing address</h3>
                        @if($billing_address)
                        <div class="mb-2">
                            <a href="{{route('client.member.address.billing.edit')}}">Edit</a>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">{{$billing_address->first_name}} {{$billing_address->last_name}}</li>
                            <li class="nav-item">{{$billing_address->street_address}}</li>
                            <li class="nav-item">{{$billing_address->city}}</li>
                            <li class="nav-item">{{$billing_address->country}}</li>
                            <li class="nav-item">{{$billing_address->post_code}}</li>
                            <li class="nav-item">{{$billing_address->state}}</li>
                        </ul>
                        @else
                        <div class="mb-2">
                            <a href="{{route('client.member.address.billing.add')}}">Add</a>
                        </div>
                        <p class="mb-0"><small>You have not set up this type of address yet.</small></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card border-muted">
                <div class="card-body">
                    <div class="text-center">
                        <h3>Shipping address</h3>
                        @if($shipping_address)
                        <div class="mb-2">
                            <a href="{{route('client.member.address.shipping.edit')}}">Edit</a>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">{{$shipping_address->first_name}} {{$shipping_address->last_name}}</li>
                            <li class="nav-item">{{$shipping_address->street_address}}</li>
                            <li class="nav-item">{{$shipping_address->city}}</li>
                            <li class="nav-item">{{$shipping_address->country}}</li>
                            <li class="nav-item">{{$shipping_address->post_code}}</li>
                        </ul>
                        @else
                        <div class="mb-2">
                            <a href="{{route('client.member.address.shipping.add')}}">Add</a>
                        </div>
                        <p class="mb-0"><small>You have not set up this type of address yet.</small></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection