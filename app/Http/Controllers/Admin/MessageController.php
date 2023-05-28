<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\MessageService;


class MessageController extends Controller
{
    /* list of resoruce */
    public function index()
    {
        try {
            $messages = MessageService::findAll();
            return view('admin.message', compact('messages'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* specific reosurce status change */
    public function status($id)
    {
        try {
            MessageService::status($id);
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* specific resoruce destory */
    public function delete($id)
    {
        try {
            MessageService::findById($id)->delete();
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
