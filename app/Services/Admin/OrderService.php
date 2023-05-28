<?php

namespace App\Services\Admin;

use App\Models\Cart;
use App\Models\Checkout;

class OrderService
{
    /* find all resource */
    public static function findAll()
    {
        return Checkout::latest()->get();
    }

    /* specific reosurce findById */
    public static function findById($id)
    {
        return Checkout::find($id);
    }

     /* specific reosurce findById status */
     public static function status($id)
     {
        $status = OrderService::findById($id);
        if($status->status == 1){
            $status['status'] = 0;
            $status->save();
            return back();
        }else{
            $status['status'] = 1;
            $status->save();
            return back();
        }
     }

    /* specific reosurce quantity update */
    public static function quantityUpdate($id, $request)
    {
        $quantity = Cart::find($id);
        $quantity['quantity'] = $request->quantity;
        $quantity->save();
    }
}
