<?php

namespace App\Http\Controllers\Admin;

use App\Models\LawCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\LawCategory\StoreLawCategoryRequest;
use App\Http\Requests\LawCategory\UpdateLawCategoryRequest;
use Illuminate\Http\Request;

class LawCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lawCategories = LawCategory::latest()->get();
        return view('admin.lawCategory.index', compact('lawCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lawCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLawCategoryRequest $request)
    {
        LawCategory::create($request->validated());
        toast('added Sucessfully','success');

        return Redirect(route('admin.lawCategory.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(LawCategory $lawCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LawCategory $lawCategory)
    {
        return view('admin.lawCategory.edit',compact('lawCategory'));

    }

    public function update(UpdateLawCategoryRequest $request, LawCategory $lawCategory)
    {
        $lawCategory->update($request->validated());
        return Redirect(route('admin.lawCategory.index',compact('lawCategory')));
    }

    
    public function destroy(LawCategory $lawCategory)
    {
        $lawCategory->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.lawCategory.index'));
    }
}
