<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        // Checking Authenticate User
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        // Render All user Admin Dashboard Page
        return view('admin.user.index', compact('users'));
    }

    // Delete Specific User from database
    public function destroy($id)
    {
        $user = User::where('id', $id)->delete();

        return redirect()->route('admin.user.index')->with('message', 'User Deleted Successfully');
    }
}
