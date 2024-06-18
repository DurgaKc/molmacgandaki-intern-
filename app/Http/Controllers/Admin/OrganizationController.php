<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organization;
use App\Http\Controllers\Controller;
use App\Http\Requests\Organization\StoreOrganizationRequest;
use App\Http\Requests\Organization\UpdateOrganizationRequest;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $organizations = Organization::latest()->get();
     return view('admin.organization.index',compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganizationRequest $request)
    {
        Organization::create($request->validated());
        toast('added successfully','success');
        return Redirect(route('admin.organization.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        return view('admin.organization.edit',compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        $organization->update($request->validated());
        toast('edited successfully','success');
        return Redirect(route('admin.organization.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        toast('deleted successfully','success');
        return Redirect(route('admin.organization.index'));
    }
}
