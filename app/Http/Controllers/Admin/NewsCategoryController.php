<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCategory\StoreNewsCategoryRequest;
use App\Http\Requests\NewsCategory\UpdateNewsCategoryRequest;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsCategories = NewsCategory::latest()->get();
        return view('admin.newsCategory.index', compact('newsCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.newsCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsCategoryRequest $request)
    {
         NewsCategory::create($request->validated());
         toast('added successfully','success');
         return Redirect(route('admin.newsCategory.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsCategory $newsCategory)
    {
        return view('admin.newsCategory.edit',compact('newsCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsCategoryRequest $request, NewsCategory $newsCategory)
    {
        $newsCategory->update($request->validated());
        return Redirect(route('admin.newsCategory.index',compact('newsCategory')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsCategory $newsCategory)
    {
        $newsCategory->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.newsCategory.index'));
    }
}
