<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Location;
use App\Services\Admin\AuthorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function homePage()
    { 
        $locations = Location::all('id', 'name');
        $homeCategories = Category::where('status', 'home')->get();
        $examCategories = Category::where('status', 'exam')->get();
        $normaleCategories = Category::where('status', 'normale')->get();
        $authors = AuthorService::findAll();
        $books = Book::where('status',1)->get(['id', 'title', 'image', 'price', 'author']);
        return view('welcome', compact('authors','normaleCategories', 'locations', 'books', 'homeCategories', 'examCategories'));
    }

    public function about(){
        return view('user.about');
    }

    public function contact(){
        return view('user.contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
     Auth::logout();
     return redirect('/');
    }

    public function search(Request $request)
    {
        $search = $request->search;
       $books = Book::query()
   ->where('title', 'LIKE', "%{$search}%") 
   ->get();
        return view('user.book.search', compact('books','search'));
    }
}
