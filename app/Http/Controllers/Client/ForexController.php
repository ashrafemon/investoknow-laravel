<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForexController extends Controller
{
    public function index() 
    {
        // Render Forex Page
        return view('client.forex.index');
    }
}
