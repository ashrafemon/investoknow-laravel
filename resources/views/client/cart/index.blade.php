@extends('layouts.client')

@section('content')
<!-- ==================== 
	     Page Title
	========================= -->
<div class="page-title bg-light">
    <div class="container">
        <h3 class="title">Cart</h3>
    </div>
</div>

<!-- ==================== 
	     Cart Section
	========================= -->
<div class="cart-section small-spacer">
    <div class="container">

        @if(Session::has('message'))
        <div class="cart-shipping-label">
            {{Session::get('message')}}.<a href="#" class="link">Continue shopping</a>
        </div>
        @endif

        <div class="cart-form">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="product-remove"></th>
                            <th class="product-thumbnail"></th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Subtotal</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(count($carts))
                        @foreach($carts as $cart)
                        <tr>
                            <td class="product-remove">
                                <form action="{{route('client.cart.delete', $cart->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </form>

                            </td>
                            <td class="product-thumbnail">
                                <a href="#"><img src="{{asset($cart->package->image)}}" alt="title"></a>
                            </td>
                            <td class="product-name">
                                <a href="#">{{$cart->package->name}}</a>
                            </td>
                            <td class="product-price">
                                <span class="woocommerce-Price-amount">€{{$cart->package->price}}</span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <label class="reader-text" for="1">{{$cart->package->name}} Quantity</label>
                                    <input type="number" id="quantity{{$loop->index + 1}}" class="input-number" step="1"
                                        min="1" max="10" name="quantity{{$loop->index + 1}}" value="{{$cart->quantity}}"
                                        title="Qty">
                                    {{-- <div class="quantity-btns"> 
                                            <a href="#" class="plus"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                            <a href="#" class="minus"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div> --}}
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span
                                    class="woocommerce-Price-amount">€{{$cart->package->price * $cart->quantity}}</span>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6">
                                You haven't any cart item...
                            </td>
                        </tr>
                        @endif

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="coupon">
                                    <label for="coupon_code">Coupon:</label>
                                    <input type="text" name="1" class="input-coupon" id="1" value=""
                                        placeholder="Coupon code">
                                    <button type="button" class="button-2 button-coupon" name="1"
                                        value="Apply coupon">Apply coupon</button>
                                </div>
                                <button type="submit" class="update-button">Update cart</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        
        <div class="cart-collaterals">
            <div class="cart-totals">
                <h2 class="title">Cart totals</h2>
                <div class="table-responsive">
                    <table class="table shop-table">
                        <tbody>
                            <tr>
                                <th>Subtotal</th>
                                <td><span class="Price-amount">€{{$subtotal}}</span></td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td><span class="Price-amount"><strong>€{{$subtotal}}</strong></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @if($subtotal > 0)
                <div class="checked-button">
                    <a href="{{route('client.order.index')}}" class="button-2">Proceed to checkout</a>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
