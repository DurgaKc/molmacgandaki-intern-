<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Law;
use App\Models\News;
use App\Models\Publication;
use App\Models\slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __invoke(Request $request)
    // {
    //     return view('dashboard');
    // }
    public function __invoke()
    {
        $slider_count = slider::count();
        $employee_count = Employee::count();
        $publication_count = Publication::count();
        $news_count = News::count();
        $law_count = Law::count();

        $chartData = collect([
            'Sliders' => $slider_count,
            'Employees' => $employee_count,
            'Publications' => $publication_count,
            'News' => $news_count,
            'Law' => $law_count
        ]);

        return view('dashboard', compact('slider_count', 'employee_count', 'news_count', 'publication_count','law_count', 'chartData'));
    }
}
