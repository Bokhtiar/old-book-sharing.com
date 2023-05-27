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

class BookController extends Controller
{
    public function index()
    {
        $books = BookService::findAll();
        return view('admin.book.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('admin.book.createOrUpdate', compact('categories', 'locations'));
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book['ISBN'] = $request->ISBN;
        $book['category_id'] = $request->category_id;
        $book['location_id'] = $request->location_id;
        $book['title'] = $request->title;
        $book['author'] = $request->author;
        $book['user_id'] = Auth::id();
        $book['role_id'] = Auth::user()->role_id;
        $book['description'] = $request->description;
        $book['price'] = $request->price;

        if ($request->image) {

            $image = $request->file('image');
            if ($image) {
                $image_name = Str::random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'image/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                if ($success) {
                    $book['image'] = $image_url;
                }
            }
        } else {
            $book['image'] = $book->image;
        }

        $book->save();
        return redirect('admin/book/index');
    }


    public function update($id = null, Request $request)
    {

        $book = Book::find($id);
        $book['ISBN'] = $request->ISBN;
        $book['category_id'] = $request->category_id;
        $book['location_id'] = $request->location_id;
        $book['title'] = $request->title;
        $book['author'] = $request->author;

        $book['user_id'] = Auth::id();


        $book['role_id'] = Auth::user()->role_id;
        $book['description'] = $request->description;
        $book['price'] = $request->price;

        if ($request->image) {

            $image = $request->file('image');
            if ($image) {
                $image_name = Str::random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'image/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                if ($success) {
                    $book['image'] = $image_url;
                }
            }
        }
        $book->save();
        return redirect('admin/book/index');
    }


    public function edit($id)
    {
        $categories = Category::all();
        $locations = Location::all();
        $edit = Book::find($id);
        return view('admin.book.createOrUpdate', compact('edit', 'categories', 'locations'));
    }

    public function show($id)
    {
        $show = Book::find($id);
        return view('admin.book.show', compact('show'));
    }


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


    public function destroy($id)
    {
        Book::find($id)->delete();
        return back();
    }

    public function pending()
    {
        $books = Book::where('role_id', 2)->get(['id', 'title', 'ISBN', 'image', 'author', 'user_id', 'status']);
        return view('admin.book.user_post', compact('books'));
    }
}
