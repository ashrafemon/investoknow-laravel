<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index() 
    {
        // Render About Page
        return view('client.about.index');
    }
}
