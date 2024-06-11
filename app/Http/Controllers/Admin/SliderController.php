<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\StoreSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\slider;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }


    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(StoreSliderRequest $request)
    {
        Slider::create($request->validated());
         toast('added Sucessfully','success');
        return Redirect(route('admin.slider.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {

        $slider->update($request->validated());
        return redirect()->route('admin.slider.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(slider $slider)
    {
        $slider->delete();
        toast('slider deleted successfully','success');
        return redirect()->route('admin.slider.index');

    }
}
