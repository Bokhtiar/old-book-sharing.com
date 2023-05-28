<?php

namespace App\Services\Admin;

use App\Models\Checkout;
use Illuminate\Support\Str;


class OrderService
{
    /* find all resource */
    public static function findAll()
    {
        return Checkout::latest()->get();
    }



    /* specific reosurce update */
    public static function update($id, $request)
    {
        $category = LocationService::findById($id);
        return $category->update(LocationService::storeDocument($request));
    }
}
