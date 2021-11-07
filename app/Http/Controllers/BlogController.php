<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::select('id', 'title', 'image', 'publishStatus')->latest()->paginate(20);

        return view('blog.index', compact('blogs'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $blog = new Blog();
        $category = $this->getCategory();
        $selectedCategories = [];
        return view('blog.form', compact('blog', 'category', 'selectedCategories'));
    }

    /**
     * @param \App\Http\Requests\BlogStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogStoreRequest $request)
    {
        $blog = Blog::create($request->validated());

        $request->session()->flash('blog.id', $blog->id);

        return redirect()->route('blog.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Blog $blog)
    {

        $category = $this->getCategory();
        $selectedCategories = $blog->categories()->pluck('id');
        return view('blog.form', compact('blog', 'category', 'selectedCategories'));
    }

    /**
     * @param \App\Http\Requests\BlogUpdateRequest $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        $blog->update($request->validated());

        $request->session()->flash('blog.id', $blog->id);

        return redirect()->route('blog.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index');
    }

    public function getCategory()
    {
        return Category::where('type', 'blog')->get()->mapwithkeys(fn ($item, $key) => [$item->id => $item->title]);
    }
}
