<?php

use App\Models\Link;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if(!function_exists("officeSetting")){
    function officeSetting(){
        return Cache::rememberForever('officeSetting',function(){
            return Setting::with('spokePerson','officeHead','informationOfficer')->latest()->first();
        });
    }
}

if(!function_exists('links'))
{
    function links()
    {
            return Link::latest()->limit(7)->get();
    }
}

