<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubCategories;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategories::with(['category'])->get(['id', 'name', 'categorie_id', 'created_at']);
        return view('subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('SubCategory.CreateSubCategory',[
            'categories'=> Categories::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=> 'required|string',
            'subcategory_name'=> 'required|string',

            //'category_slug'=> 'required|string|alpha',

            'is_active'=> 'nullable',
        ]);

        $category=Categories::all();

        SubCategories::create([
            'categorie_id'=> $request->category_name,
            'name'=> $request->subcategory_name,
            'slug'=> Str::slug($request->subcategory_name),
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
        $subcategory = SubCategories::find($id);
        return view('subcategory.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //dd($id);
        $categories = Categories::get(['id', 'name']);
        $subcategory = SubCategories::find($id);
       // return $subcategory.$categories;
        return view('subcategory.edit', compact(
            'categories',
            'subcategory'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_name'=> 'required|string',
            'subcategory_name'=> 'required|string',

            //'category_slug'=> 'required|string|alpha',

            'is_active'=> 'nullable',
        ]);
       // dd($request->all());

        $subcategory = SubCategories::find($id);

        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'is_active' => $request->filled('is_active')
        ]);

        Session::flash('status', 'SubCategory updated successfully!');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        SubCategories::find($id)->delete();
        Session::flash('status', 'SubCategory deleted successfully!');
        return redirect()->route('subcategory.index');
    }
}
