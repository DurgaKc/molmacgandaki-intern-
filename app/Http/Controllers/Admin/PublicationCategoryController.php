<?php

namespace App\Http\Controllers\Admin;

use App\Models\PublicationCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\PublicationCategory\StorePublicationCategoryRequest;
use App\Http\Requests\PublicationCategory\UpdatePublicationCategoryRequest;
use Illuminate\Http\Request;

class PublicationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicationCategories = publicationCategory::latest()->get();
        return view('admin.publicationCategory.index',compact('publicationCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.publicationCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicationCategoryRequest $request)
    {
        PublicationCategory::create($request->validated());
        toast('added successfully','success');
        return Redirect(route('admin.publicationCategory.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PublicationCategory $publicationCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PublicationCategory $publicationCategory)
    {
        return view('admin.publicationCategory.edit',compact('publicationCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicationCategoryRequest $request, PublicationCategory $publicationCategory)
    {
        $publicationCategory->update($request->validated());
        return Redirect(route('admin.publicationCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PublicationCategory $publicationCategory)
    {
        $publicationCategory->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.publicationCategory.index'));
    }
}
