@extends('layouts.client')

@section('content')
<!-- ==================== 
	     Page Title
	========================= -->
<div class="page-title bg-light">
    <div class="container">
        <h3 class="title">Checkout</h3>

    </div>
</div>

<!-- ==================== 
	     Checkout Section
	========================= -->
<div class="checkout-section small-spacer">
    <div class="container">
        <div class="contact-form">
            

            <form action="{{route('client.order.checkout')}}" method="POST">
                @csrf
                <div class="address-form mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h5>Billing Address</h5>
                            <div class="billing-address-form">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" name="billing_first_name" id="billing_first_name" value="{{$billing_address->first_name ?? old('billing_first_name')}}">

                                            <span class="text-danger font-weight-bold small">{{$errors->first('billing_first_name')}}</span>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" name="billing_last_name" id="billing_last_name" value="{{$billing_address->last_name ?? old('billing_last_name')}}">
                                            <span class="text-danger font-weight-bold small">{{$errors->first('billing_last_name')}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Company Name</label>
                                    <input type="text" class="form-control" name="billing_company_name" id="billing_company_name" value="{{$billing_address->company_name ?? old('billing_company_name')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('billing_company_name')}}</span>
                                </div>
                
                                <div class="form-group">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control" name="billing_country" id="billing_country" value="{{$billing_address->country ?? old('billing_country')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('billing_country')}}</span>
                                </div>
                
                                <div class="form-group">
                                    <label for="">Street Address</label>
                                    <input type="text" class="form-control" name="billing_street_address" id="billing_street_address" value="{{$billing_address->street_address ?? old('billing_street_address')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('billing_street_address')}}</span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">State</label>
                                    <input type="text" class="form-control" name="billing_state" id="billing_state" value="{{$billing_address->state ?? old('billing_state')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('billing_state')}}</span>
                                </div>
                
                                <div class="form-group">
                                    <label for="">Post Code</label>
                                    <input type="text" class="form-control" name="billing_post_code" id="billing_post_code" value="{{$billing_address->post_code ?? old('billing_post_code')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('billing_post_code')}}</span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="billing_city" id="billing_city" value="{{$billing_address->city ?? old('billing_city')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('billing_city')}}</span>
                                </div>
                
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" name="billing_phone" id="billing_phone" value="{{$billing_address->phone ?? old('billing_phone')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('billing_phone')}}</span>
                                </div>
                
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="billing_email" id="billing_email" value="{{$billing_address->email ?? old('billing_email')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('billing_email')}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <h5>Shipping Address</h5>
                            <div class="billing-address-form">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" name="shipping_first_name" id="shipping_first_name" value="{{$shipping_address->first_name ?? old('shipping_first_name')}}">
                                            <span class="text-danger font-weight-bold small">{{$errors->first('shipping_first_name')}}</span>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" name="shipping_last_name" id="shipping_last_name" value="{{$shipping_address->last_name ?? old('shipping_last_name')}}">
                                            <span class="text-danger font-weight-bold small">{{$errors->first('shipping_last_name')}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Company Name</label>
                                    <input type="text" class="form-control" name="shipping_company_name" id="shipping_company_name" value="{{$shipping_address->company_name ?? old('shipping_company_name')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('shipping_company_name')}}</span>
                                </div>
                
                                <div class="form-group">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control" name="shipping_country" id="shipping_country" value="{{$shipping_address->country ?? old('shipping_country')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('shipping_country')}}</span>
                                </div>
                
                                <div class="form-group">
                                    <label for="">Street Address</label>
                                    <input type="text" class="form-control" name="shipping_street_address" id="shipping_street_address" value="{{$shipping_address->country ?? ('shipping_street_address')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('shipping_street_address')}}</span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Post Code</label>
                                    <input type="text" class="form-control" name="shipping_post_code" id="shipping_post_code" value="{{$shipping_address->post_code ?? old('shipping_post_code')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('shipping_post_code')}}</span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="shipping_city" id="shipping_city" value="{{$shipping_address->city ?? old('shipping_city')}}">
                                    <span class="text-danger font-weight-bold small">{{$errors->first('shipping_city')}}</span>
                                </div>
                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-collection">
                    <h5>Your Cart Items</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carts as $cart)
                            <tr>
                                <td class="product-name">{{$cart->package->name}} × {{$cart->quantity}}</td>
                                <td class="product-subtotal"><span class="woocommerce-Price-amount">${{$cart->quantity * $cart->package->price}}</span></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>

                <div class="payment-methods">
                    <div class="form-group">
                        <label for="">
                            <input type="radio" name="payment_method" id="payment_method" value="paypal" required> 
                            <img src="https://img.icons8.com/color/24/000000/paypal.png"/>
                            <span>Paypal</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="button-2">Place order</button>
                </div>
                
            </form>
        </div>

    </div>
</div>


@endsection
