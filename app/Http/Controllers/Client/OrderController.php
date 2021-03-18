<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\BillingAddress;
use App\ShippingAddress;
use App\Cart;
use App\Order;
use Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        // Checking Authenticate User
        $this->middleware('auth');
    }

    // Render Order Page with billing address & shipping address & cart item
    public function index()
    {
        $user_id = Auth::user()->id;

        // fetching billing address & shipping address & cart items
        $billing_address = BillingAddress::where('user_id', $user_id)->first();
        $shipping_address = ShippingAddress::where('user_id', $user_id)->first();
        $carts = Cart::where('user_id', $user_id)->get();

        if(count($carts) > 0){
            // if user have any cart item then render order page
            return view('client.order.index', compact('billing_address', 'shipping_address', 'carts'));
        }else{
            // Redirect to cart page
            return redirect()->route('client.cart.index');
        }
    }

    // Add order to database
    public function checkout()
    {
        $user_id = Auth::user()->id;

        // fetching billing address & shipping address & cart items
        $billing_address = BillingAddress::where('user_id', $user_id)->first();
        $shipping_address = ShippingAddress::where('user_id', $user_id)->first();
        $carts = Cart::where('user_id', $user_id)->get();

        // If user have billing address then update that
        if($billing_address){
            // If billing address already exists then update it
            $billing_address->user_id = $user_id;
            $billing_address->first_name = request('billing_first_name');
            $billing_address->last_name = request('billing_last_name');
            $billing_address->company_name = request('billing_company_name');
            $billing_address->country = request('billing_country');
            $billing_address->street_address = request('billing_street_address');
            $billing_address->state = request('billing_state');
            $billing_address->post_code = request('billing_post_code');
            $billing_address->city = request('billing_city');
            $billing_address->phone = request('billing_phone');
            $billing_address->email = request('billing_email');

            $billing_address->update();
        }else{

            // if user haven't any billing address
            
            // billing address form validate
            $data = request()->validate([
                'billing_first_name' => 'required|string',
                'billing_last_name' => 'required|string',
                'billing_company_name' => 'string',
                'billing_country' => 'required|string',
                'billing_street_address' => 'required',
                'billing_state' => 'required',
                'billing_post_code' => 'required',
                'billing_city' => 'required',
                'billing_phone' => 'required',
                'billing_email' => 'required|email',
            ]);

            // add billing address to database
            $add_billing_address = new BillingAddress();

            $add_billing_address->user_id = $user_id;
            $add_billing_address->first_name = request('billing_first_name');
            $add_billing_address->last_name = request('billing_last_name');
            $add_billing_address->company_name = request('billing_company_name');
            $add_billing_address->country = request('billing_country');
            $add_billing_address->street_address = request('billing_street_address');
            $add_billing_address->state = request('billing_state');
            $add_billing_address->post_code = request('billing_post_code');
            $add_billing_address->city = request('billing_city');
            $add_billing_address->phone = request('billing_phone');
            $add_billing_address->email = request('billing_email');

            $add_billing_address->save();
            
        }

        // If user have shipping address then update that
        if($shipping_address){
            // If shipping address already exists then update it
            $shipping_address->user_id = $user_id;
            $shipping_address->first_name = request('shipping_first_name');
            $shipping_address->last_name = request('shipping_last_name');
            $shipping_address->company_name = request('shipping_company_name');
            $shipping_address->country = request('shipping_country');
            $shipping_address->street_address = request('shipping_street_address');
            $shipping_address->post_code = request('shipping_post_code');
            $shipping_address->city = request('shipping_city');

            $shipping_address->update();
        }else{
            // if user haven't any shipping address

            // validate shipping address form data
            $data = request()->validate([
                'shipping_first_name' => 'required|string',
                'shipping_last_name' => 'required|string',
                'shipping_company_name' => 'string',
                'shipping_country' => 'required|string',
                'shipping_street_address' => 'required',
                'shipping_post_code' => 'required',
                'shipping_city' => 'required',
            ]);

            // add shipping address to database
            $add_shipping_address = new ShippingAddress();

            $add_shipping_address->user_id = $user_id;
            $add_shipping_address->first_name = request('shipping_first_name');
            $add_shipping_address->last_name = request('shipping_last_name');
            $add_shipping_address->company_name = request('shipping_company_name');
            $add_shipping_address->country = request('shipping_country');
            $add_shipping_address->street_address = request('shipping_street_address');
            $add_shipping_address->post_code = request('shipping_post_code');
            $add_shipping_address->city = request('shipping_city');

            $add_shipping_address->save();
        }

        // Add cart item to database with billing & shipping address 
        // After adding order to database then delete cart item from database
        foreach($carts  as $cart){
            

            // fetching billing address & shipping address
            $billing_address = BillingAddress::where('user_id', $user_id)->first();
            $shipping_address = ShippingAddress::where('user_id', $user_id)->first();
            
            // add order to database
            $order = new Order();
            $order->user_id = $user_id;
            $order->package_id = $cart->package_id;
            $order->billing_address_id = $billing_address->id;
            $order->shipping_address_id = $shipping_address->id;
            $order->package_quantity = $cart->quantity;
            $order->package_total_price = $cart->quantity * $cart->package->price;
            $order->payment_method = request('payment_method');

            $order->save();
            $cart->delete();
        }

        // If order added in database then redirect to payment page
        return redirect()->route('client.order.pay');
        
    }

    // Render Paypal Payment Page
    public function pay_paypal()
    {
        $user_id = Auth::user()->id;

        // fetching order which is not paid...
        $orders = Order::where('user_id', $user_id)->where('payment_status', false)->get();


        if(count($orders) > 0){
            // if uppaid order found
            $orders_total_price = 0;

            // set order total price 
            foreach($orders as $order){
                $orders_total_price += $order->package_total_price;
            }
    
            // Render payment page
            return view('client.order.pay', compact('orders_total_price'));
        }else{

            // Redirect Order Dashboard Page
            return redirect()->route('client.member.order.index');
        }
    }

    // After payment set order item payment status with payer, order, payment id
    public function confirm_pay_paypal()
    {

        $user_id = Auth::user()->id;

        // fetching order which is not paid...
        $orders = Order::where('user_id', $user_id)->where('payment_status', false)->get();

        // set order item payment field
        foreach($orders as $order){
            $order->payer_id = $_COOKIE['payer_id'];
            $order->payment_id = $_COOKIE['payment_id'];
            $order->order_id = $_COOKIE['order_id'];
            $order->payment_status = true;

            $order->update();
        }

        // After order item payment field added succeffully then clear cookie
        unset($_COOKIE['payer_id']);
        unset($_COOKIE['payment_id']);
        unset($_COOKIE['order_id']);

        // After Payment redirect to order dashboard page
        return redirect()->route('client.member.order.index');
    }
}
