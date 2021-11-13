<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::select('id', 'title', 'image', 'publishStatus')
            ->when($request->keyword, fn ($query) => $query->where('title', 'like', "%$request->keyword%"))
            ->latest()
            ->paginate(10);

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
        DB::beginTransaction();
        try {
            $blog = Blog::create(Arr::except($request->validated(), $request->category));
            $blog->categories()->sync($request->validated()['category']);
            $request->session()->flash('success', $blog->id);
            DB::commit();
            return redirect()->route('blog.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            $request->session()->flash('error', $th->getMessage());
            return back()->withInput();
        }
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
        DB::beginTransaction();
        try {
            $blog->update(Arr::except($request->validated(), $request->category));
            $blog->categories()->sync($request->validated()['category']);
            DB::commit();
            $request->session()->flash('success', 'blogUpdated successfully');
            return redirect()->route('blog.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            $request->session()->flash('error', $th->getMessage());
            return back()->withInput();
        }
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
