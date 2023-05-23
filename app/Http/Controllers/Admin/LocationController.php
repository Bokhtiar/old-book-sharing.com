<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all('id', 'name');
        return view('admin.location.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.location.createOrUpdate');
    }

    public function store(Request $request)
    {
        $location = new Location;
        $location['name'] = $request->name;
        $location['slug'] = Str::slug($request->name);
        $location->save();
        return redirect('admin/location/index');
    }

    public function update($id, Request $request)
    {

        $location = Location::find($id);
        $location['name'] = $request->name;
        $location['slug'] = Str::slug($request->name);
        $location->save();
        return redirect('admin/location/index');
    }


    public function edit($id)
    {
        $edit = Location::find($id);
        return view('admin.location.createOrUpdate', compact('edit'));
    }

    public function destroy($id)
    {
        Location::find($id)->delete();
        return redirect('admin/location/index');
    }
}
