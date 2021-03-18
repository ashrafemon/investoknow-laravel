<?php

namespace App\Http\Controllers\Client\Dashboard\Membership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        // Checking Authenticate User
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        
        // fetching paid order from database
        $paid_orders = Order::where('user_id', $user_id)->where('payment_status', true)->get();

        // Render User Order Dashboard Page
        return view('client.dashboard.membership.order.index', compact('paid_orders'));
    }
}
