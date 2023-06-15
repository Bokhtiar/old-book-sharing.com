<?php

namespace App\Services\Admin;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class BookService
{
    /* find all resource */
    public static function findAll()
    {
        return Book::latest()->get(['id', 'title', 'ISBN', 'image', 'author', 'user_id', 'status']);
    }

    /* store resoruce documents */
    public static function storeDocument($request, $image = null)
    {
        if ($request->image) {
            $image = $request->file('image');
            if ($image) {
                $image_name = Str::random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'image/';
                $image_urls = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                if ($success) {
                    $image_url = $image_urls;
                }
            }
        } else {
            $image_url = $image;
        }

        return array(
            'ISBN' => $request->ISBN,
            'category_id' => $request->category_id,
            'location_id' => $request->location_id,
            'location' => $request->location,
            'title' => $request->title,
            'author' => $request->author,
            'user_id' => Auth::id(),
            'role_id' => Auth::user()->role_id,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image_url,
        );
    }

    /* new store resource docuemnt */
    public static function store($request)
    {
        return Book::create(BookService::storeDocument($request));
    }

    /* specific reosurce show */
    public static function findById($id)
    {
        return Book::find($id);
    }

    /* specific reosurce update */
    public static function update($id, $request)
    {
        $book = BookService::findById($id);
        return $book->update(BookService::storeDocument($request, $book->image));
    }
}
