<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Package;

class VipController extends Controller
{
    public function index()
    {
        // fetching vip package from database
        $vip_package = Package::where('type', 'vip')->first();
        
        // Render Vip Page
        return view('client.vip.index', compact('vip_package'));
    }
}
