<?php

namespace App\Http\Controllers\Client\Dashboard\Membership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        // Cheking Authenticate User
        $this->middleware('auth');
    }

    public function index()
    {
        // Render Account Details Dashboard Page
        return view('client.dashboard.membership.account.index');
    }

    // Update Account Details Function
    public function update()
    {
        $user = Auth::user();

        // validate account details form data 
        $data = request()->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
        ]);
        
        //if current password filed is filled then Change Current Password
        if(request('current_password')){

            // Changing current password with new password
            if(Hash::check(request('current_password'), Auth::user()->password))
            {
                if(request('new_password') == request('confirm_new_password')){
                    $user->first_name = request('first_name');
                    $user->last_name = request('last_name');
                    $user->username = request('username');
                    $user->password = Hash::make(request('new_password'));
    
                    $user->update();
                    Auth::logout();
    
                    return redirect()->route('client.member.login.view')->with('message', 'User information updated successfully...');
                }else{
                    return redirect()->route('client.member.account.index')->with('error','New Password & Confirm Password are not matched...');
                }
            }else{
                return redirect()->route('client.member.account.index')->with('error','Current Password not matched...');
            }
        }else{

            // if current password filed is empty then update user details field

            $user->first_name = request('first_name');
            $user->last_name = request('last_name');
            $user->username = request('username');

            $user->update();

            // Redirect Account Dashboard Page
            return redirect()->route('client.member.account.index')->with('message', 'User information updated successfully...');
        }
        
    }
}
