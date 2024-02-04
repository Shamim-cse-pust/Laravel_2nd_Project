<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostRequest $request)
    {
        return "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        return "delete";
    }
}
