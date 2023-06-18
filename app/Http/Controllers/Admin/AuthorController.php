<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\AuthorService;

class AuthorController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $authors = AuthorService::findAll();
            return view('admin.author.index', compact('authors'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        try {
            return view('admin.author.createUpdate');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        try {
            AuthorService::store($request);
            return redirect()->route('admin.author.index');
        } catch (\Throwable $th) {
            throw $th; 
        }
    }

    /* Display the specified resource. */
    public function show($id)
    {}

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $edit = AuthorService::findById($id);
            return view('admin.author.createUpdate',compact('edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        try {
            AuthorService::update($id,$request);
            return redirect()->route('admin.author.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            AuthorService::findById($id)->delete();
            return redirect()->route('admin.author.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
