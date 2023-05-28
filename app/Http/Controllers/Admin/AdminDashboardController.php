<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\User;
use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        $users = User::all()->count();
        $books = Book::where('status',1)->get()->count();
        $pending_book = Book::where('status',0)->get()->count();
        $message = Message::all()->count();
        return view('admin.index', compact('users', 'books', 'pending_book', 'message'));
    }

    /* logout */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
