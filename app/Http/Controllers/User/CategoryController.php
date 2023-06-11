<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /* list of resoruce display */
    public function list()
    {
        try {
            $books = Book::where('status',1)->get();
            $categories = Category::all();
            return view('user.category_list',compact('books', 'categories'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function index($id)
    {
        $books = Book::where('category_id', $id)->where('status',1)->get();
        $b = Category::where('id', $id)->first();
        $category_name = $b->name;
        return view('user.category',compact('books', 'category_name'));
    }
}
