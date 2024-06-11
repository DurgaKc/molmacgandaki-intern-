<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('newsCategory')->latest()->get();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newsCategories = NewsCategory::latest()->get();
        return view('admin.news.create',compact('newsCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        // dd($request->all());
        News::create($request->validated());
        toast('added Successfully', 'success');
        return Redirect(route('admin.news.index'));
        }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $newsCategories = NewsCategory::latest()->get();

        return view('admin.news.edit',compact('news','newsCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $news->update($request->validated());
        return Redirect(route('admin.news.index', compact('news')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.news.index'));
    }
}
