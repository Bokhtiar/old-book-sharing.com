<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
     public function store(Request $request)
     {
         $message = new Message;
         $message['name'] = $request->name;
         $message['subject'] = $request->subject;
         $message['email'] = $request->email;
         $message['message'] = $request->message;
         $message->save();
         return back();
     }
}
