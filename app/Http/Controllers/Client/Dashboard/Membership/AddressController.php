<?php

namespace App\Http\Controllers\Client\Dashboard\Membership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\BillingAddress;
use App\ShippingAddress;

class AddressController extends Controller
{
     
    public function __construct()
    {
        // Checking Authenticate User
        $this->middleware('auth');
    }

    // Viewing Address Index Page
    public function index()
    {
        $billing_address = BillingAddress::where('user_id', Auth::user()->id)->first();
        $shipping_address = ShippingAddress::where('user_id', Auth::user()->id)->first();

        return view('client.dashboard.membership.address.index', compact('billing_address', 'shipping_address'));
    }

    // Viewing Billing Address Form Page for Adding
    public function addBilling()
    {
        return view('client.dashboard.membership.address.billing.create');
    }

    // Store Billing Address Bind with Auth User
    public function storeBilling()
    {
        $data = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company' => 'string',
            'country' => 'required|string',
            'street_address' => 'required',
            'state' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        // add billing address
        $billing_address = new BillingAddress();

        $billing_address->user_id = Auth::user()->id;
        $billing_address->first_name = request('first_name');
        $billing_address->last_name = request('last_name');
        $billing_address->company_name = request('company_name');
        $billing_address->country = request('country');
        $billing_address->street_address = request('street_address');
        $billing_address->state = request('state');
        $billing_address->post_code = request('post_code');
        $billing_address->city = request('city');
        $billing_address->phone = request('phone');
        $billing_address->email = request('email');

        $billing_address->save();

        // Redirect to address dashboard page
        return redirect()->route('client.member.address.index')->with('message', 'Billing address successfully added...');
    }

    // Viewing Billing Address Form Page for Editing
    public function editBilling()
    {
        $billing_address = BillingAddress::where('user_id', Auth::user()->id)->first();
        return view('client.dashboard.membership.address.billing.edit', compact('billing_address'));
    }

    // Update Billing Address Bind with Auth User
    public function updateBilling()
    {
        $billing_address = BillingAddress::where('user_id', Auth::user()->id)->first();

        $data = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company' => 'string',
            'country' => 'required|string',
            'street_address' => 'required',
            'state' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        // Update Billing Address
        $billing_address->user_id = Auth::user()->id;
        $billing_address->first_name = request('first_name');
        $billing_address->last_name = request('last_name');
        $billing_address->company_name = request('company_name');
        $billing_address->country = request('country');
        $billing_address->street_address = request('street_address');
        $billing_address->state = request('state');
        $billing_address->post_code = request('post_code');
        $billing_address->city = request('city');
        $billing_address->phone = request('phone');
        $billing_address->email = request('email');

        $billing_address->update();

        // Redirect to address dashboard page
        return redirect()->route('client.member.address.index')->with('message', 'Billing address successfully updated...');
    }


    // Viewing Billing Address Form Page for Adding
    public function addShipping()
    {
        return view('client.dashboard.membership.address.shipping.create');
    }

    // Store Shipping Address Bind with Auth User
    public function storeShipping()
    {
        $data = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company' => 'string',
            'country' => 'required|string',
            'street_address' => 'required',
            'post_code' => 'required',
            'city' => 'required',
        ]);

        // Add new shipping address
        $shipping_address = new ShippingAddress();

        $shipping_address->user_id = Auth::user()->id;
        $shipping_address->first_name = request('first_name');
        $shipping_address->last_name = request('last_name');
        $shipping_address->company_name = request('company_name');
        $shipping_address->country = request('country');
        $shipping_address->street_address = request('street_address');
        $shipping_address->post_code = request('post_code');
        $shipping_address->city = request('city');

        $shipping_address->save();

        // Redirect to address dashboard page
        return redirect()->route('client.member.address.index')->with('message', 'Shipping address successfully added...');
    }

    // Viewing Billing Address Form Page for Editing
    public function editShipping()
    {
        $shipping_address = ShippingAddress::where('user_id', Auth::user()->id)->first();
        return view('client.dashboard.membership.address.shipping.edit', compact('shipping_address'));
    }

    // Update Shipping Address Bind with Auth User
    public function updateShipping()
    {
        $shipping_address = ShippingAddress::where('user_id', Auth::user()->id)->first();

        // Shipping address form data validate
        $data = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company' => 'string',
            'country' => 'required|string',
            'street_address' => 'required',
            'post_code' => 'required',
            'city' => 'required',
        ]);

        // Update Shipping Address
        $shipping_address->user_id = Auth::user()->id;
        $shipping_address->first_name = request('first_name');
        $shipping_address->last_name = request('last_name');
        $shipping_address->company_name = request('company_name');
        $shipping_address->country = request('country');
        $shipping_address->street_address = request('street_address');
        $shipping_address->post_code = request('post_code');
        $shipping_address->city = request('city');

        $shipping_address->update();

        // Redirect ot address dashboard pagee
        return redirect()->route('client.member.address.index')->with('message', 'Shipping address successfully updated...');
    }
}
