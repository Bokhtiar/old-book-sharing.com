<?php

namespace App\Services\Admin;

use App\Models\Author;
use Illuminate\Support\Str;

class AuthorService
{
    /* find all resource */
    public static function findAll()
    {
        return Author::latest()->get();
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
                $upload_path = 'image/author/';
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
            'name' => $request->name,
            'image' => $image_url,
            'body' => $request->body,
        );
    }

    /* new store resource docuemnt */
    public static function store($request)
    {

        return Author::create(AuthorService::storeDocument($request));
    }

    /* specific reosurce show */
    public static function findById($id)
    {
        return Author::find($id);
    }

    /* specific reosurce update */
    public static function update($id, $request)
    {
        $author = AuthorService::findById($id);
        return $author->update(AuthorService::storeDocument($request, $author->image));
    }
}
