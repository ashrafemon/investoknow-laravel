<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AffiliateDashboardController extends Controller
{
    public function __construct()
    {
        // Checking Authentic User
        $this->middleware('auth');
    }

    public function index()
    {
        // Render Affiliate Dashboard Page
        return view('client.dashboard.affiliate.index');
    }
    
}
