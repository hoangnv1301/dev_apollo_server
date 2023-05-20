<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Core\Models\Post;
use Cms\Modules\Core\Models\Contact;
use Cms\Modules\Admin\Services\Contracts\AdminPostServiceContract;
use Cms\Modules\Admin\Services\Contracts\AdminContactServiceContract;
// use Cms\Modules\Admin\Requests\PostStoreRequest;
use Illuminate\Http\Request;
// use Cms\Modules\Admin\Services\Contracts\RecipeSurveyServiceContract;
// use Cms\Modules\Vote\Services\Contracts\VoteSurveyServiceContract;

class AdminController extends Controller
{
    protected $recipe;

    public function __construct(
        AdminPostServiceContract $post,
        AdminContactServiceContract $contact
    )
    {
        $this->middleware('auth');
        $this->post = $post;
        $this->contact = $contact;
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
        $requestAll = $request->All();
        if ($request->thumbnail){
            //get unique filename
            $originName = $request->thumbnail->getClientOriginalName();
            $filename = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->thumbnail->getClientOriginalExtension();
            $filename = $filename.'_'.time().'.'.$extension;

            //get correct path
            $path = $request->thumbnail->move(custom_public_path('images'), $filename);
            $path = substr($path, strpos($path, "images"));
            $requestAll['thumbnail'] = $path;
        }

        //save
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

        if ($request->thumbnail){
            //get unique filename
            $originName = $request->thumbnail->getClientOriginalName();
            $filename = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->thumbnail->getClientOriginalExtension();
            $filename = $filename.'_'.time().'.'.$extension;

            //get correct path
            $path = $request->thumbnail->move(custom_public_path('images'), $filename);
            $path = substr($path, strpos($path, "images"));
            $requestAll['thumbnail'] = $path;
        }
        //update
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

    public function uploadImageCkeditor(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filename = $filename.'_'.time().'.'.$extension;
            $request->file('upload')->move(custom_public_path('images'), $filename);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = cxl_asset('images/'.$filename);
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url')</script>";
            return response()->json([ 'fileName' => $filename, 'uploaded' => true, 'url' => $url, ]);
        }
    }

    public function contactsPage()
    {
        $contacts = $this->contact->getAll();

        return view('Admin::content.contacts.contacts-page', compact('contacts'));
    }

    public function contactsDetail($id)
    {
        $contact = $this->contact->find($id);

        return view('Admin::content.contacts.contacts-detail', compact('contact'));
    }

    public function contactsUpdate(Request $request, $id)
    {
        $requestAll = $request->All();
        $contact = $this->contact->update($id, $requestAll);

        return redirect()->back();
    }

    public function contactsDelete($id)
    {
        $contact = $this->contact->delete($id);
        $contacts = $this->contact->getAll();

        return redirect()->route('cms.contact.page', compact('contacts'))->with('success', 'Contact has been deleted!');
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
