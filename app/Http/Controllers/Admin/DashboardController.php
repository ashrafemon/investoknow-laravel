<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Cheking Authenticate User
        $this->middleware('auth');
    }

    public function index()
    {
        if(!(Auth::user()->type == 'admin')){
            // if user type is general then redirect to user dashboard
            return redirect()->route('client.member.dashboard');
        }
        
        // Render Admin Dashboard Page
        return view('admin.dashboard.index');
    }
}
