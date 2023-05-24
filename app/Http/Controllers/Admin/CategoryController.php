<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\Admin\CategoryService;

class CategoryController extends Controller
{
    /* find all resoruce */
    public function index()
    {
        try {
            $categories = CategoryService::categoryList();
            return view('admin.category.index', compact('categories'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* store new document */
    public function store(CategoryRequest $request)
    {
        try {
            CategoryService::categoryStore($request);
            $categories = CategoryService::categoryList();
            return view('admin.category.index', compact('categories'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($id){}

    /* specific resource show */
    public function edit($id)
    {
        try {
            $edit = CategoryService::categoryFindById($id);
            $categories = CategoryService::categoryList();
            return view('admin.category.index', compact('categories', 'edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* specific resoruce updated */
    public function update(CategoryRequest $request, $id)
    {
        try {
            CategoryService::categoryFindByUpdate($id, $request);
            return redirect()->route('admin.category.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* specific resource delete */
    public function destroy($id)
    {
        try {
            CategoryService::categoryFindById($id)->delete();
            return redirect()->route('admin.category.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
