<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subordinate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Subordinate\StoreSubordinateRequest;
use App\Http\Requests\Subordinate\UpdateSubordinateRequest;
use Illuminate\Http\Request;

class SubordinateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subordinates = Subordinate::latest()->get();
        return view('admin.subordinate.index',compact('subordinates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subordinate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubordinateRequest $request)
    {
        Subordinate::create($request->validated());
        toast('added successfully','success');
        return Redirect(route('admin.subordinate.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subordinate $subordinate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subordinate $subordinate)
    {
        return view('admin.subordinate.edit',compact('subordinate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubordinateRequest $request, Subordinate $subordinate)
    {
        $subordinate->update($request->validated());
        return Redirect(route('admin.subordinate.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subordinate $subordinate)
    {
        $subordinate->delete();
        toast('added successfully','success');
        return Redirect(route('admin.subordinate.index'));
    }
}
