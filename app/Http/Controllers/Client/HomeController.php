<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Package;

class HomeController extends Controller
{
    
    public function index()
    {
        // fetching vip package from database
        $vip_package = Package::where('type', 'vip')->first();

        // Render Home Page
        return view('client.home.index', compact('vip_package'));
    }
}
