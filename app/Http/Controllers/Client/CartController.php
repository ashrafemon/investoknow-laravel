<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Import Database Specific Model
use Auth;
use App\Cart;
use App\Package;

class CartController extends Controller
{
    public function __construct()
    {
        // Checking Authenticate User
        $this->middleware('auth');
    }

    // Render Cart Page & Show carts from database
    public function index()
    {

        // Fetching All Carts From Database Authenticate User
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $subtotal = 0;

        // Set Subtotal From Carts
        foreach($carts as $cart){
            $subtotal += $cart->package->price * $cart->quantity;
        }

        // Render Cart Page
        return view('client.cart.index', compact('carts', 'subtotal'));
    }

    // Add a package to Cart Database
    public function add(Request $request)
    {
        $user_id = Auth::user()->id;
        $package_id = request('package_id');
        $quantity = request('quantity');

        // Get One Package from database
        $package = Package::where('id', $package_id)->first();
        $package_name = $package->name;
        $message = '"'.$package_name.'" has been added to your cart';

        // If package already exist in database for this user
        $exist_package_cart = Cart::where('user_id', $user_id)->where('package_id', $package_id)->first();
        if($exist_package_cart){
            // Update Existing Cart Item
            $exist_package_cart->quantity += $quantity;
            $exist_package_cart->update();

            // Redirect to cart page
            return redirect()->route('client.cart.index')->with('message', $message);
        }else{
            // Create New Cart
            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->package_id = $package_id;
            $cart->quantity = $quantity;
    
            $cart->save();

            // Redirect Cart Page
            return redirect()->route('client.cart.index')->with('message', $message);
        }  
    }

    // Delete Specific Cart Item from Database
    public function destroy($id)
    {
        // Delete Specific Cart Item
        $cart = Cart::where('id', $id)->delete();

        // Redirect Cart Page
        return redirect()->route('client.cart.index');
    }
}
