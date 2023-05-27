<?php

namespace App\Services\Admin;

use App\Models\Location;

class LocationService
{
    /* find all resource */
    public static function findAll()
    {
        return Location::latest()->get(['id', 'name']);
    }

    /* store resoruce documents */
    public static function storeDocument($request)
    {
        return array(
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        );
    }

    /* new store resource docuemnt */
    public static function store($request)
    {
        return Location::create(LocationService::storeDocument($request));
    }

    /* specific reosurce show */
    public static function findById($id)
    {
        return Location::find($id);
    }

    /* specific reosurce update */
    public static function update($id, $request)
    {
        $category = LocationService::findById($id);
        return $category->update(LocationService::storeDocument($request));
    }
}
