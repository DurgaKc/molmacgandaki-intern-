<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publication;
use App\Http\Controllers\Controller;
use App\Http\Requests\Publication\StorePublicationRequest;
use App\Http\Requests\Publication\UpdatePublicationRequest;
use App\Models\PublicationCategory;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::with('publicationCategory')->latest()->get();
        // toast('added Sucessfully','success');
        return view('admin.publication.index', compact('publications'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $publicationCategories = PublicationCategory::latest()->get();
        return view('admin.publication.create', compact('publicationCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicationRequest $request)
    {
        Publication::create($request->validated());
        toast('added Sucessfully','success');
        return Redirect(route('admin.publication.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        $publicationCategories = PublicationCategory::latest()->get();
        return view('admin.publication.edit',compact('publication','publicationCategories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicationRequest $request, Publication $publication)
    {
        $publication->update($request->validated());
        return Redirect(route('admin.publication.index',compact('publication')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.publication.index'));
    }
}
