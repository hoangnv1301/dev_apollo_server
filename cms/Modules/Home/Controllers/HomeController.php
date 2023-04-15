<?php

namespace Cms\Modules\Home\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.home');
    }

    public function aboutUs(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.about-us');
    }

    public function blogPost(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.blog-post');
    }

    public function blog(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.blog');
    }

    public function clients(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.clients');
    }

    public function contact(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.contact');
    }

    public function costCalculation(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.costs-calculation');
    }

    public function costCalculationResult(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.cost-calculation-result');
    }

    public function individualMember(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.individual-member');
    }

    public function ourTeam(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.our-team');
    }

    public function ourWork(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::pages.our-work');
    }
}
