<?php

namespace App\Http\Controllers\Client\Dashboard\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\User;

class GenerateLinkController extends Controller
{
    public function __construct()
    {
        // Checking Authenticate User
        $this->middleware('auth');
    }

    public function index()
    {
        // Render Affiliate Generate Link Page
        return view('client.dashboard.affiliate.generate.index');
    }

    // Update Affiliate Generate Link to database
    public function update(Request $request)
    {
        $user_id = Auth::user()->id;

        // get Authenticate user details
        $user = User::where('id', $user_id)->first();

        // Set affiliate link to database
        $user->affiliate_link = request('affiliate_link').'?ref='.$user_id;
        $user->update();

        // Redirect to affiliate generate page
        return redirect()->route('client.affiliate.generate.index');
    }
}
