<?php

namespace App\Services\Admin;

use App\Models\Category;

class CategoryService
{
    public static function categoryList()
    {
        return Category::latest()->get(['id', 'name']);
    }
}
