<?php

namespace Cms\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Core\Models\Contact;
use Cms\Modules\Admin\Services\Contracts\AdminPostServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminContactServiceContract;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        AdminPostServiceContract $post,
        AdminContactServiceContract $contact
    )
    {
        $this->post = $post;
        $this->contact = $contact;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('Home::pages.home');
    }

    public function aboutUs()
    {
        return view('Home::pages.about-us');
    }

    public function blogPost($id)
    {
        $post = $this->post->find($id);
        //count number of view
        $post->find($id)->increment('view');

        return view('Home::pages.blog-post', compact('post'));
    }

    public function blog()
    {
        $posts = $this->post->getAll();

        return view('Home::pages.blog', compact('posts'));
    }

    public function clients()
    {
        return view('Home::pages.clients');
    }

    public function contact()
    {
        return view('Home::pages.contact');
    }

    public function contactSubmit(Request $request)
    {
        $requestAll = $request->All();
        //save
        $post = $this->contact->store($requestAll);

        return redirect()->route('web.contact')->with('success', 'Your request has been processed successfully.');
    }

    public function costCalculation()
    {
        return view('Home::pages.costs-calculation');
    }

    public function costCalculationResult()
    {
        return view('Home::pages.cost-calculation-result');
    }

    public function individualMember()
    {
        return view('Home::pages.individual-member');
    }

    public function ourTeam()
    {
        return view('Home::pages.our-team');
    }

    public function ourWork()
    {
        return view('Home::pages.our-work');
    }
}
