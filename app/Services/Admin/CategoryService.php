<?php

namespace App\Services\Admin;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    /* find all resource */
    public static function categoryList()
    {
        return Category::latest()->get(['id', 'name', 'image', 'status']);
    }

    /* store resoruce documents */
    public static function categoryStoreDocument($request, $image =null)
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
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
            'image' => $image_url,
        );
    } 

    /* new store resource docuemnt */
    public static function categoryStore($request)
    {
        return Category::create(CategoryService::categoryStoreDocument($request));
    }

    /* specific reosurce show */
    public static function categoryFindById($id)
    {
        return Category::find($id);
    }

    /* specific reosurce update */
    public static function categoryFindByUpdate($id, $request)
    {
        $category = CategoryService::categoryFindById($id);
        $image = $category->image;
        return $category->update(CategoryService::categoryStoreDocument($request, $image));
    }
}
