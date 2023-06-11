<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Book;

class LocationController extends Controller
{
    /* list of display resoruce */
    public function list()
    {
        $books = Book::where('status',1)->get();
        $locations = Location::get();
        return view('user.location_list', compact('locations', 'books'));
    }

    /* list of display resoruce location has assing*/
    public function index($id)
    {

        $books = Book::where('location_id', $id)->where('status',1)->get();
        $b = Location::where('id', $id)->first();
        $location_name = $b->name;

        return view('user.location',compact('books','location_name'));
    }
}
