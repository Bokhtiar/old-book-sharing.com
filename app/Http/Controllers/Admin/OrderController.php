<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\OrderService;


class OrderController extends Controller
{
    /* list of all resoruce */
    public function index()
    {
        try {
            $checkouts = OrderService::findAll();
            return view('admin.checkout.index', compact('checkouts'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* specific resource status change */
    public function status($id)
    {
        try {
            OrderService::status($id);
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* specific resoruce desotry */
    public function destroy($id)
    {
        try {
            OrderService::findById($id);
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    /* specific reousrce show */
    public function detail($id)
    {
        $checkout = OrderService::findById($id);
        return view('admin.checkout.detail', compact('checkout'));
    }

    /* specific resource quantity update */
    public function quantity(Request $request, $id)
    {
        try {
            OrderService::quantityUpdate($id, $request);
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* specific resoruce destroy */
    public function delete($id)
    {
        $delete = Cart::find($id);
        $delete->delete();
        return back();
    }
}
