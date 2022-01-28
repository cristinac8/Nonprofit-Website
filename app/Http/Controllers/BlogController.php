<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BlogController extends Controller
{

    public function __construct()
    {
        Paginator::useBootstrap();
    }

    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate('12');
        return view('admin.blogs', compact('blogs'));
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->titleEN;
        $blog->entry = $request->descriptionEN;
        $blog->titleRO = $request->titleRO;
        $blog->entryRO = $request->descriptionRO;

        // if request has image file, then store to database
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = date('y-m-d') . $image->getClientOriginalName();
            $destinationPath = public_path('stories');
            $image->move($destinationPath, $imageName);
            $blog->photo = $imageName;
        }
        // prettier url
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->titleEN)));
        $blog->url = $slug;

        $blog->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('admin.blog-update', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->title = $request->titleEN;
        $blog->entry = $request->descriptionEN;
        $blog->titleRO = $request->titleRO;
        $blog->entryRO = $request->descriptionRO;

        if ($request->hasFile('image')) {
            // delete image from directory
            unlink(public_path('stories/' . $blog->photo));

            $image = $request->file('image');
            $imageName = date('y-m-d') . $image->getClientOriginalName();
            $destinationPath = public_path('stories');
            $image->move($destinationPath, $imageName);
            $blog->photo = $imageName;
        }

        $blog->save();
        return redirect()->to('admin/blogs');
    }

    public function delete($id)
    {
        $blog = Blog::where('id', $id)->first();
        // delete image from directory
        unlink(public_path('stories/' . $blog->photo));
        $blog->delete();
        return redirect()->back();
    }

    public function single($url)
    {
        $story = Blog::where('url', $url)->first();
        if ($story == "") {
            abort(404);
        }
        return view('client.story', compact('story'));
    }

    public function all()
    {
        $stories = Blog::orderBy('id', 'desc')->paginate(9);
        return view('client.stories', compact('stories'));
    }
}
