<?php

namespace App\Http\Controllers\Admin;
 
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\LocationService;
use App\Http\Requests\locationRequest;

class LocationController extends Controller
{
    /* find all resource */
    public function index()
    {
        try {
            $locations = LocationService::findAll();
            return view('admin.location.index', compact('locations'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* store new resoruce */
    public function store(locationRequest $request)
    {
        try {
            LocationService::store($request);
            return redirect()->route('admin.location.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* reosurce edit */
    public function edit($id)
    {
        try {
            $edit = LocationService::findById($id);
            $locations = LocationService::findAll();
            return view('admin.location.index', compact('locations', 'edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    /* specific resoruce update */
    public function update($id, locationRequest $request)
    {
        try {
            LocationService::update($id, $request);
            return redirect()->route('admin.location.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* specific resource destory */
    public function destroy($id)
    {
        try {
            LocationService::findById($id)->delete();
            return redirect()->route('admin.location.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
