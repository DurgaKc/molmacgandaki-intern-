<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Introduction;
use App\Models\Law;
use App\Models\Link;
use App\Models\slider;
use App\Models\Subordinate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = slider::latest()->get();
        return view('frontend.index', compact('sliders'));
    }

    public function citizen()
    {
        return view('frontend.pages.about.citizen');
    }
    public function employee()
    {
        $search = request('search');

        $employees = Employee::when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                ->orWhere('name_en', 'like', "%{$search}%");
                // ->orWhere('ip_address', 'like', "%{$search}%");
            })->get();

        // $employees = Employee::all();
        return view('frontend.pages.about.employee',compact('employees'));
    }
    public function introduction()
    {
        $introductions = Introduction::all();
        return view('frontend.pages.about.introduction',compact('introductions'));
    }
    public function organization(){
        return view('frontend.pages.about.organization');
    }
    public function workarea(){
        return view('frontend.pages.about.workarea');
    }
    public function agri(){
        return view('frontend.pages.branch.agri');
    }
    public function land(){
        return view('frontend.pages.branch.land');
    }
    public function lives(){
        return view('frontend.pages.branch.lives');
    }
    public function planning(){
        return view('frontend.pages.branch.planning');
    }
    public function act()
    {
        $laws = Law::all();
        return view('frontend.pages.legal.act' , compact('laws'));
    }
    public function lawDetail(Law $law){
        return view('frontend.pages.legal.lawDetail',compact('law'));
    }
    public function agdv(){
        return view('frontend.pages.legal.agdv');
    }
    public function criteria(){
        return view('frontend.pages.legal.criteria');
    }
    public function document(){
        return view('frontend.pages.legal.document');
    }
    public function other(){
    return view('frontend.pages.legal.other');
    }
    public function procedure(){
        return view('frontend.pages.legal.procedure');
    }
    public function business(){
        return view('frontend.pages.publication.business');
    }
    public function form(){
        return view('frontend.pages.publication.form');
    }
    public function ministry(){
        return view ('frontend.pages.publication.ministry');
    }
    public function others(){
        return view('frontend.pages.publication.others');
        }
    public function publication(){
    return view('frontend.pages.publication.publication');
    }
    public function record(){
        return view('frontend.pages.publication.record');
    }
    public function news(){
        return view('frontend.pages.news');
    }
    public function audio(){
        return view('frontend.pages.gallery.audio');
    }
    public function photo(){
        return view('frontend.pages.gallery.photo');
    }
    public function vedio(){
        return view('frontend.pages.gallery.vedio');
    }
    public function photos(){
        return view('frontend.pages.gallery.photos');
    }
    public function contact(){

        return view('frontend.pages.contact');
    }
    public function feedback(StoreContactRequest $request)
    {

            Contact::create($request->validated());
             toast('added Sucessfully','success');
            return back();
    }


    public function subordinate(){
        $subordinates = Subordinate::latest()->get();
        return view('frontend.pages.subordinate',compact('subordinates'));
    }

}
