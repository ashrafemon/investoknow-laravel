<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $paid_orders = Order::where('payment_status', true)->get();
        $unpaid_orders = Order::where('payment_status', false)->get();

        // Render All order Admin Dashboard Page
        return view('admin.order.index', compact('paid_orders', 'unpaid_orders'));
    }

    // Delete specific order from database
    public function destroy($id)
    {
        $order = Order::where('id', $id)->delete();
        return redirect()->route('admin.order.index');
    }

    // Show a specific order from database
    public function show($id)
    {
        $order = Order::where('id', $id)->first();

        return view('admin.order.show', compact('order'));
    }
}
