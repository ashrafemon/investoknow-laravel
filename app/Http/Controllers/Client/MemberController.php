<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\User;
use App\Promote;

use Auth;

class MemberController extends Controller
{
    // Render Login page
    public function loginView()
    {
        if(Auth::check()){
            // If already logged user then redirect dashboard page
            return redirect()->route('client.member.dashboard');
        }else{
            // Render Login Page
            return view('client.membership.login');
        }
    }

    public function registerView()
    {
        // get promotes items from database
        $promotes = Promote::all();
        // Render Register Page
        return view('client.membership.register', compact('promotes'));
    }

    // Add user to database & redirect to login page
    public function register()
    {
        // Validate register form data
        $data = request()->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|string|min:5',
            'payment_email' => 'required|string|max:255|email'
        ]);

        // set user name cutting email address before @ text
        $username = explode('@',request('email'));

        // Set user id for affiliate refer link
        $user_id = count(User::all()) + 1;

        // Add user to database
        User::create([
            'first_name' => request('first_name'),
            'email' => request('email'),
            'username' => $username[0],
            'password' => Hash::make(request('password')),
            'payment_email' => request('payment_email'),
            'promote_id' => request('promote'),
            'affiliate_link' => url(env('APP_URL')).'?ref='.$user_id
        ]);

        // Redirect to login page
        return redirect()->route('client.member.login.view')->with('message', 'Successfully Register User...');
    }

}
