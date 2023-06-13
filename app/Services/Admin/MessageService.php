<?php

namespace App\Services\Admin;

use App\Models\Message;

class MessageService
{
    /* find all resource */
    public static function findAll()
    {
        return Message::latest()->get(['id', 'email', 'message', 'status']);
    }

    /* specific reosurce show */
    public static function findById($id)
    {
        return Message::find($id);
    }

    /* specific resource status change */
    public static function status($id)
    {
        $status = MessageService::findById($id);
        if ($status->status == 1) {
            $status['status'] = 0;
            $status->save();
            return back();
        } else {
            $status['status'] = 1;
            $status->save();
            return back();
        }
    }
}
