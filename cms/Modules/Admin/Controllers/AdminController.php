<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Core\Models\Post;
use Cms\Modules\Admin\Services\Contracts\PostPostServiceContract;
// use Cms\Modules\Admin\Requests\PostStoreRequest;
use Illuminate\Http\Request;
// use Cms\Modules\Admin\Services\Contracts\RecipeSurveyServiceContract;
// use Cms\Modules\Vote\Services\Contracts\VoteSurveyServiceContract;

class AdminController extends Controller
{
    protected $recipe;

    public function __construct(
        PostPostServiceContract $post
    )
    {
        $this->middleware('auth');
        $this->post = $post;
    }

    public function index()
    {
        return view('Admin::content.dashboard.dashboards-analytics');
    }
    public function postsPage()
    {
        $posts = $this->post->getAll();

        return view('Admin::content.posts.posts-page', compact('posts'));
    }

    public function postsDetail($id)
    {
        $post = $this->post->find($id);

        return view('Admin::content.posts.posts-detail', compact('post'));
    }

    public function postsCreate()
    {
        return view('Admin::content.posts.posts-create');
    }

    public function postsStore(Request $request)
    {
        $requestAll = $request->all();
        $post = $this->post->store($requestAll);
        $posts = $this->post->getAll();

        return redirect()->route('cms.post.page', compact('posts'))->with('success', 'Your request has been processed successfully.');
    }

    public function postsEdit($id)
    {
        $post = $this->post->find($id);

        return view('Admin::content.posts.posts-edit', compact('post'));
    }

    public function postsUpdate(Request $request, $id)
    {
        $requestAll = $request->all();
        $post = $this->post->update($id, $requestAll);
        $posts = $this->post->getAll();

        return redirect()->route('cms.post.page', compact('posts'))->with('success', 'Your request has been processed successfully.');
    }

    public function postsDelete($id)
    {
        $post = $this->post->delete($id);
        $posts = $this->post->getAll();

        return redirect()->route('cms.post.page', compact('posts'))->with('success', 'Your request has been processed successfully.');
    }

    public function layoutsBlank()
    {
        return view('Admin::content.layouts-example.layouts-blank');
    }

    public function formsBasicInputs()
    {
        return view('Admin::content.form-elements.forms-basic-inputs');
    }

    public function formsInputGroups()
    {
        return view('Admin::content.form-elements.forms-input-groups');
    }


}
