<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Package;

class PackageController extends Controller
{
    public function __construct()
    {
        // Checking Authenticate User
        $this->middleware('auth');
    }

    public function index()
    {
        $packages = Package::all();

        // Render All package Admin Dashboard Page
        return view('admin.package.index', compact('packages'));
    }

    public function create()
    {
        // Render Create Package Page
        return view('admin.package.create');
    }


    // Store package to database
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'type' => 'required'
        ]);

        $image = $request->file('image');
        
        $image_name = time();
        $image_ext = strtolower($image->getClientOriginalExtension());

        $image_full_name = $image_name.'.'.$image_ext;
        $uploaded_path = 'admin/package/';
        $image_url = $uploaded_path.$image_full_name;
        $success = $image->move($uploaded_path, $image_full_name);

        $package = new Package();

        $package->name = request('name');
        $package->price = request('price');
        $package->description = request('description');
        $package->type = request('type');
        $package->image = $image_url;

        $package->save();

        return redirect()->route('admin.package.index')->with('message', 'Successfully package added...');
    }
}
