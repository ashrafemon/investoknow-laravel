@extends('client.dashboard.membership.layouts.membership')

@section('membership-content')
<div class="section">
    <h2>Shipping address</h2>

    <form action="{{route('client.member.address.shipping.update', $shipping_address->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="first_name">First Name *</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Ex. John" value="{{$shipping_address->first_name}}" />
        </div>
        <div class="form-group">
            <label for="last_name">Last Name *</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ex. Doe" value="{{$shipping_address->last_name}}" />
        </div>
        <div class="form-group">
            <label for="company_name">Company Name (Optional)</label>
            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Ex. Grid Solutions" value="{{$shipping_address->company_name}}" />
        </div>
        <div class="form-group">
            <label for="country">Country / Region *</label>
            <input type="text" class="form-control" name="country" id="country" placeholder="Ex. Bangladesh" value="{{$shipping_address->country}}" />
        </div>
        <div class="form-group">
            <label for="street_address">Street Address *</label>
            <input type="text" class="form-control" name="street_address" id="street_address" placeholder="House number and street address" value="{{$shipping_address->street_address}}" />
        </div>
        <div class="form-group">
            <label for="post_code">Postcode / ZIP *</label>
            <input type="text" class="form-control" name="post_code" id="post_code" placeholder="Ex. 1219" value="{{$shipping_address->post_code}}" />
        </div>
        <div class="form-group">
            <label for="city">Town / City *</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Ex. Dhaka" value="{{$shipping_address->city}}" />
        </div>
        <div class="form-group">
            <button type="submit" class="button-2">Save Address</button>
        </div>
    </form>
</div>
@endsection