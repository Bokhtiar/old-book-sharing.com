<?php

namespace App\Services\Admin;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    /* find all resource */
    public static function categoryList()
    {
        return Category::latest()->get(['id', 'name']);
    }

    /* store resoruce documents */
    public static function categoryStoreDocument($request)
    {
        return array(
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
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
        return $category->update(CategoryService::categoryStoreDocument($request));
    }
}
