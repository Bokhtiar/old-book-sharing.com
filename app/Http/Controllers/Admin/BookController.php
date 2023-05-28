<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BookRequest;
use App\Services\Admin\BookService;
use App\Services\Admin\CategoryService;
use App\Services\Admin\LocationService;

class BookController extends Controller
{
    /* resoruce list */
    public function index()
    {
        $books = BookService::findAll();
        return view('admin.book.index', compact('books'));
    }

    /* create new resoruce form */
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('admin.book.createOrUpdate', compact('categories', 'locations'));
    }

    /* create new resoruce store */
    public function store(BookRequest $request)
    {
        try {
            BookService::store($request);
            return redirect()->route('admin.book.index');
        } catch (\Throwable $th) {
            throw $th;
        }
       
    }
    /* specific resource edit */
    public function edit($id)
    {
        try {
            $categories = CategoryService::categoryList();
            $locations = LocationService::findAll();
            $edit = BookService::findById($id);
            return view('admin.book.createOrUpdate', compact('edit', 'categories', 'locations'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    /* sepecific reosurce update */
    public function update($id = null, BookRequest $request)
    {
        try {
            BookService::update($id, $request);
            return redirect()->route('admin.book.index');
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    /* specific resoruce show */
    public function show($id)
    {
        try {
            $show = Book::find($id);
            return view('admin.book.show', compact('show'));
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    /* published unpublished */
    public function status($id)
    {
        $book = Book::find($id);
        $bk =  $book->status == 1;
        if ($bk) {
            $book['status'] = 0;
            $book->save();
            return back();
        } else {
            $book['status'] = 1;
            $book->save();
            return back();
        }
    }

    /* specific reosurce delete */
    public function destroy($id)
    {
        Book::find($id)->delete();
        return back();
    }

    /* pending book request */
    public function pending()
    {
        try {
            $books = Book::where('role_id', 2)->get(['id', 'title', 'ISBN', 'image', 'author', 'user_id', 'status']);
            return view('admin.book.user_post', compact('books'));            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
