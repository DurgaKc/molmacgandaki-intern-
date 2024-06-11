<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\UpdateSettingRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::latest()->get()
;        $setting = Setting::latest()->first();
        return view('admin.setting.index', compact('setting','employees'));
    }


    public function create()
    {//
    }

        public function store(UpdateSettingRequest $request)
    {
        $setting = Setting::latest()->first();
        toast('added Sucessfully','success');
        if(!empty($setting))
        {
            $setting->update($request->validated());
        }
        else{
            Setting::create($request->validated());
        }
        return back();
    }


}
