<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class MemberDashboardController extends Controller
{
    public function __construct()
    {
        // Checking Authenticate User
        $this->middleware('auth');
    }

    public function index()
    {
        if(!(Auth::user()->type == 'general')){
            // If admin logged in then redirect to admin dashboard
            return redirect()->route('admin.dashboard.index');
        }

        // Render User Dashboard Page
        return view('client.dashboard.membership.index');
    }


    public function downloads()
    {
        // Render Download Page
        return view('client.dashboard.membership.downloads');
    }

    public function paymentMethods()
    {
        // Render Payment Page
        return view('client.dashboard.membership.payments');
    }

    // public function accountDetails()
    // {
    //     return view('client.dashboard.membership.account');
    // }


    public function cupons()
    {
        // Render Cupon Page
        return view('client.dashboard.membership.cupons');
    }

}
