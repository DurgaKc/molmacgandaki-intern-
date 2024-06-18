<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Introduction\StoreIntroductionRequest;
use App\Http\Requests\Introduction\UpdateIntroductionRequest;
use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index(){
        $introductions = Introduction::latest()->get();
        return view('admin.introduction.index',compact('introductions'));
      }
      public function create()
    {
        return view('admin.introduction.create');
    }
    public function store(StoreIntroductionRequest $request)
    {
        Introduction::create($request->validated());
        toast('added Sucessfully','success');

        return Redirect(route('admin.introduction.index'));
    }
    public function edit(Introduction $introduction)
    {
        return view('admin.introduction.edit',compact('introduction'));

    }

    public function update(UpdateIntroductionRequest $request, Introduction $introduction)
    {
        $introduction->update($request->validated());
        return Redirect(route('admin.introduction.index',compact('introduction')));
    }


    public function destroy(Introduction $introduction)
    {
        $introduction->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.introduction.index'));
    }
}
