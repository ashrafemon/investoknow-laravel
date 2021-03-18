<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Render Blog Page
        return view('client.blog.index');
    }

    public function show()
    {
        // Render Single Blog Page
        return view('client.blog.show');
    }
}
