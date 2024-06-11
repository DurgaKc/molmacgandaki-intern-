<?php

namespace App\Http\Controllers\Admin;

use App\Models\Law;
use App\Http\Controllers\Controller;
use App\Http\Requests\Law\StoreLawRequest;
use App\Http\Requests\Law\UpdateLawRequest;
use App\Models\LawCategory;
use Illuminate\Http\Request;

class LawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laws = Law::with('lawCategory')->get();
        return view('admin.law.index',compact('laws'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lawCategories = LawCategory::latest()->get();
        return view('admin.law.create', compact('lawCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLawRequest $request)
    {
        Law::create($request->validated());
        toast('added Sucessfully','success');
        return Redirect(route('admin.law.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Law $law)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Law $law)
    {
        $lawCategories = LawCategory::latest()->get();
        return view('admin.law.edit', compact('law','lawCategories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLawRequest $request, Law $law)
    {
        $law->update($request->validated());
        return Redirect(route('admin.law.index',compact('law')));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Law $law)
    {
        $law->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.law.index'));

    }
}
