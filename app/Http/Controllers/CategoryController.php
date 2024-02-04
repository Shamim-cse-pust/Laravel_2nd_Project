<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\returnSelf;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        //dd($request->all());

        Categories::create([
            'name'=> $request->category_name,
            'slug'=> Str::slug($request->category_name),
            'is_active'=> $request->filled('is_active'),
        ]);
        Session::flash('status', 'Category created successfully!');
        return back() ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
