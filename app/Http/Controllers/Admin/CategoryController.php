<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\Admin\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryService::categoryList();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.createOrUpdate');
    }


    public function store(Request $request){
        $category = new Category;
        $category['name'] = $request->name;
        $category['slug'] = Str::slug($request->name);
        $category->save();
        return redirect('admin/category/index');
    }

    public function update(Request $request ,$id){
        $category = Category::find($id);
        $category['name'] = $request->name;
        $category['slug'] = Str::slug($request->name);
        $category->save();
        return redirect('admin/category/index');
    }


    public function edit($id)
    {
        $edit = Category::find($id);
        return view('admin.category.createOrUpdate', compact('edit'));
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect('admin/category/index');
    }
}
