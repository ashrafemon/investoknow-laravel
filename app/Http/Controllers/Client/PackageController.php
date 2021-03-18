<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Package;

class PackageController extends Controller
{
    public function index()
    {
        // fetching all package from database
        $packages = Package::all();

        // Render Package page
        return view('client.package.index', compact('packages'));
    }
}
