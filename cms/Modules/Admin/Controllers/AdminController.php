<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Admin::content.dashboard.dashboards-analytics');
    }

    public function welcome(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Admin::welcome');
    }
}
